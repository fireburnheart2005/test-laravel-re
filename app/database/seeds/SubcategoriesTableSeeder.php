<?php

class SubcategoriesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('subcategories')->delete();

		// category_id = 1
        Subcategory::create(array(
            'category_id' => 1,
            'name' => 'Nhà mặt tiền'
        ));

        Subcategory::create(array(
            'category_id' => 1,
            'name' => 'Nhà hẻm'
        ));

        Subcategory::create(array(
            'category_id' => 1,
            'name' => 'Biệt thự/Villa'
        ));

        Subcategory::create(array(
            'category_id' => 1,
            'name' => 'Mặt tiền nội bộ'
        ));

        // category_id = 2
        Subcategory::create(array(
            'category_id' => 2,
            'name' => 'Căn hộ đang triển khai'
        ));

        Subcategory::create(array(
            'category_id' => 2,
            'name' => 'Căn hộ đã hoàn thành'
        ));

        Subcategory::create(array(
            'category_id' => 2,
            'name' => 'Căn hộ'
        ));

        Subcategory::create(array(
            'category_id' => 2,
            'name' => 'Chung cư tập thể'
        ));

        // category_id = 3
        Subcategory::create(array(
            'category_id' => 3,
            'name' => 'Nền dự án/KDC mới'
        ));

        Subcategory::create(array(
            'category_id' => 3,
            'name' => 'Thổ cư/Hiện hữu'
        ));

        Subcategory::create(array(
            'category_id' => 3,
            'name' => 'Đất nông nghiệp'
        ));

        Subcategory::create(array(
            'category_id' => 3,
            'name' => 'Đất sản xuất/Kho bãi/Xưởng'
        ));

        // category_id = 4
        Subcategory::create(array(
            'category_id' => 4,
            'name' => 'Tòa nhà/Chung cư'
        ));

        Subcategory::create(array(
            'category_id' => 4,
            'name' => 'Nhà phố/Mặt tiền'
        ));

        Subcategory::create(array(
            'category_id' => 4,
            'name' => 'Sạp chợ'
        ));

        Subcategory::create(array(
            'category_id' => 4,
            'name' => 'Shop TT thương mại'
        ));

        // category_id = 5
        Subcategory::create(array(
           'category_id' => 5,
            'name' => 'Tòa nhà/Cao ốc'
        ));

        Subcategory::create(array(
           'category_id' => 5,
            'name' => 'Nhà phố'
        ));

        Subcategory::create(array(
           'category_id' => 5,
            'name' => 'Căn hộ'
        ));

        Subcategory::create(array(
           'category_id' => 5,
            'name' => 'Ảo/Express'
        ));

        // category_id = 6
        Subcategory::create(array(
            'category_id' => 6,
            'name' => 'Nhà xưởng'
        ));

        Subcategory::create(array(
            'category_id' => 6,
            'name' => 'Nhà kho'
        ));

        // category_id = 7
        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Quán ăn/Nhà hàng'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Khách sạn/Nhà nghỉ/Nhà trọ'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Cafe/Bar/Giải trí'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Bán lẻ/Áo quần/ĐTDĐ'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Sức khỏe/Sắc đẹp'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Ô tô/Xe máy'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Giáo dục đào tạo'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Sản xuất/Công nghiệp'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Nông lâm nghiệp'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Xuất nhập khẩu/Buôn bán sỉ'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Dịch vụ chuyên nghiệp'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'BĐS/Xây dựng'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Vận tải/Phân phối'
        ));

        Subcategory::create(array(
            'category_id' => 7,
            'name' => 'Loại hình khác'
        ));
	}

}