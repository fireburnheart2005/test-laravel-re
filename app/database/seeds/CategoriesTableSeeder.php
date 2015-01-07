<?php

class CategoriesTableSeeder extends Seeder {
	/**
	 * User table seeder.
	 *
	 * @return void
	 */
  public function run()
  {
      DB::table('categories')->delete();

      Category::create(array(
      	'id' => 1,
        'name' => 'Nhà'
      ));

      Category::create(array(
        'id' => 2,
        'name' => 'Căn hộ'
      ));

      Category::create(array(
        'id' => 3,
        'name' => 'Đất'
      ));

      Category::create(array(
        'id' => 4,
        'name' => 'Mặt bằng'
      ));

      Category::create(array(
        'id' => 5,
        'name' => 'Văn Phòng'
      ));

      Category::create(array(
        'id' => 6,
        'name' => 'Kho xưởng'
      ));

      Category::create(array(
        'id' => 7,
        'name' => 'Cửa hàng/Shop'
      ));
  }

}