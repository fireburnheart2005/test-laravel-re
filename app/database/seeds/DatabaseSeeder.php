<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// Seed area map data
		$db = new PDO('mysql:host=localhost;dbname=property_listing;charset=utf8', 'root', 'abcdabcd');
		$handle = fopen(__DIR__.'/CitiesTableSeeder.sql', 'r') or die('Unable to open CitiesTableSeeder.sql file!');
		$sql = fread($handle, filesize(__DIR__.'/CitiesTableSeeder.sql'));
		$db->query($sql);
		fclose($handle);
	    $this->command->info('cities table seeded!');

    	$handle = fopen(__DIR__.'/DistrictsTableSeeder.sql', 'r') or die('Unable to open DistrictsTableSeeder.sql file!');
    	$sql = fread($handle, filesize(__DIR__.'/DistrictsTableSeeder.sql'));
    	$db->query($sql);
    	fclose($handle);
        $this->command->info('districts table seeded!');

    	$handle = fopen(__DIR__.'/WardsTableSeeder.sql', 'r') or die('Unable to open WardsTableSeeder.sql file!');
    	$sql = fread($handle, filesize(__DIR__.'/WardsTableSeeder.sql'));
    	$db->query($sql);
    	fclose($handle);
        $this->command->info('wards table seeded!');

		// Seed other tables
		$this->call('UsersTableSeeder');
		$this->call('ListingsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('SubcategoriesTableSeeder');
	}

}
