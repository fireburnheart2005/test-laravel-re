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
		$handle = fopen(__DIR__.'/area_map.sql', 'r') or die('Unable to open area_map.sql file!');
		$sql = fread($handle, filesize(__DIR__.'/area_map.sql'));
		$db->query($sql);
		fclose($handle);
	    $this->command->info('cities, districts, wards tables seeded!');
		// Seed other tables
		$this->call('UsersTableSeeder');
		$this->call('PropertiesTableSeeder');
	}

}
