<?php

class UsersTableSeeder extends Seeder {
	/**
	 * User table seeder.
	 *
	 * @return void
	 */
  public function run()
  {
      DB::table('users')->delete();

      User::create(array(
      	'id' => 1,
      	'email' => 'trankhanh.tk.kt@gmail.com',
      	'first_name' => 'Tran',
      	'last_name' => 'Khanh',
      	'password' => Hash::make('abcdabcd')));
  }

}