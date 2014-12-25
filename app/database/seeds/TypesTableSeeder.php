<?php

class TypesTableSeeder extends Seeder {

	public function run()
	{
        DB::table('types')->delete();

		// category_id = 1
        Type::create(array(
            'category_id' => 1,
            'name' => 'Nhà mặt tiền'
        ));

        Type::create(array(
            'category_id' => 1,
            'name' => 'Nhà hẻm'
        ));

        Type::create(array(
            'category_id' => 1,
            'name' => 'Biệt thự/Villa'
        ));

        Type::create(array(
            'category_id' => 1,
            'name' => 'Mặt tiền nội bộ'
        ));

        // category_id = 2
        Type::create(array(
            'category_id' => 2,
            'name' => 'Căn hộ đang triển khai'
        ));

        Type::create(array(
            'category_id' => 2,
            'name' => 'Căn hộ đã hoàn thành'
        ));

        Type::create(array(
            'category_id' => 2,
            'name' => 'Căn hộ'
        ));

        Type::create(array(
            'category_id' => 2,
            'name' => 'Chung cư tập thể'
        ));

        // category_id = 3
        Type::create(array(
            'category_id' => 3,
            'name' => 'Nền dự án/KDC mới'
        ));

        Type::create(array(
            'category_id' => 3,
            'name' => 'Thổ cư/Hiện hữu'
        ));

        Type::create(array(
            'category_id' => 3,
            'name' => 'Đất nông nghiệp'
        ));

        Type::create(array(
            'category_id' => 3,
            'name' => 'Đất sản xuất/Kho bãi/Xưởng'
        ));

        // category_id = 4
        Type::create(array(
            'category_id' => 4,
            'name' => 'Tòa nhà/Chung cư'
        ));

        Type::create(array(
            'category_id' => 4,
            'name' => 'Nhà phố/Mặt tiền'
        ));

        Type::create(array(
            'category_id' => 4,
            'name' => 'Sạp chợ'
        ));

        Type::create(array(
            'category_id' => 4,
            'name' => 'Shop TT thương mại'
        ));

        // category_id = 5
        Type::create(array(
           'category_id' => 5,
            'name' => 'Tòa nhà/Cao ốc'
        ));

        Type::create(array(
           'category_id' => 5,
            'name' => 'Nhà phố'
        ));

        Type::create(array(
           'category_id' => 5,
            'name' => 'Căn hộ'
        ));

        Type::create(array(
           'category_id' => 5,
            'name' => 'Ảo/Express'
        ));

        // category_id = 6
        Type::create(array(
            'category_id' => 6,
            'name' => 'Nhà xưởng'
        ));

        Type::create(array(
            'category_id' => 6,
            'name' => 'Nhà kho'
        ));

        // category_id = 7
        Type::create(array(
            'category_id' => 7,
            'name' => 'Quán ăn/Nhà hàng'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Khách sạn/Nhà nghỉ/Nhà trọ'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Cafe/Bar/Giải trí'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Bán lẻ/Áo quần/ĐTDĐ'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Sức khỏe/Sắc đẹp'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Ô tô/Xe máy'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Giáo dục đào tạo'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Sản xuất/Công nghiệp'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Nông lâm nghiệp'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Xuất nhập khẩu/Buôn bán sỉ'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Dịch vụ chuyên nghiệp'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'BĐS/Xây dựng'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Vận tải/Phân phối'
        ));

        Type::create(array(
            'category_id' => 7,
            'name' => 'Loại hình khác'
        ));
	}

}