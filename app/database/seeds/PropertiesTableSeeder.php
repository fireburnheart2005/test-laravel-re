<?php

class PropertiesTableSeeder extends Seeder {
	/**
	 * User table seeder.
	 *
	 * @return void
	 */
  public function run()
  {
    DB::table('properties')->delete();

    Property::create(array(
      'id' => 1,
    	'user_id' => 1,
      'name' => 'Cho thuê Vila 100,150,300m2 tại Biệt thự The Oasis gần Aeon Binh Duong',
      'slug' => 'Cho-thue-Vila-100,150,300m2-tai-Biet-thu-The-Oasis-gan-Aeon-Binh-Duong',
      'description' => "Cho thuê Villa AVI 300m2 tại Biệt thự Làng chuyên gia the Oasis.\nNhà mới hoàn thiện, rất đẹp. Nội ngoại thất sang trọng.\nĐã có chuyên gia người Nhật Bản đồng ý thuê giá 1400USD/ tháng. Nhưng giá cho thuê 1500 USD/ tháng.\nMiễn phí GYM, SWIMING 1 năm. Hỗ trợ đăng ký tạm trú cho khách nước ngoài.\nBán và cho thuê Biệt thự Làng chuyên gia the Oasis.\nHãy cùng chúng tôi cảm nhận cuộc sống của những người thành đạt.\nTrực tiếp từ chủ Đầu tư SNI.",
      'type_id' => '1',
      'category_id' => '1',
    	'transaction_type' => 'sale',
      'price' => '14000000',
      // 'currency' => 'VND',
      'square' => '150',
      'bedrooms' => '4',
      'bathrooms' => '2',
      'city_id' => '01',
      'district_id' => '001',
      'ward_id' => '001',
      'address' => '234',
      'contact_name' => 'Tran Khanh',
      'contact_mobile' => '090 303 9106',
      'created_at' => '2014-10-09 14:56:18'));
  }

}