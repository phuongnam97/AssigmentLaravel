<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();
        DB::table('products')->insert([
            [
                'name'=>'Suzuki Address 110Fi',
                'description'=>'Suzuki Address 110Fi là mẫu xe có thiết kế trẻ trung hiện đại và khối động cơ mạnh mẽ.',
                'price'=>'28000000',
                'images'=>'https://vnn-imgs-f.vgcloud.vn/2018/04/14/09/xe-ga-1.jpg',
                'category'=>'Xe tay ga'
            ],
            [
                'name'=>'Suzuki Impulse 125 Fi',
                'description'=>'Impulse là mẫu xe có thiết kế cao cấp và hiện đại với đầu xe cá tính.',
                'price'=>'31000000',
                'images'=>'https://vnn-imgs-f.vgcloud.vn/2018/04/14/09/xe-ga-2.jpg',
                'category'=>'Xe tay ga'
            ],
            [
                'name'=>'Yamaha Janus',
                'description'=>'Yamaha Janus là dòng xe tay ga phổ thông giá rẻ của hãng Yamaha. ',
                'price'=>'32000000',
                'images'=>'https://vnn-imgs-f.vgcloud.vn/2018/04/14/09/xe-ga-3.jpg',
                'category'=>'Xe tay ga'
            ],[
                'name'=>'Honda Air Blade',
                'description'=>'Với thiết kế tinh tế, thon gọn kết hợp cùng những đường nét, mạnh mẽ. ',
                'price'=>'40000000',
                'images'=>'https://vnn-imgs-f.vgcloud.vn/2018/04/14/09/xe-ga-7.jpg',
                'category'=>'Xe tay ga'
            ],

            [
                'name'=>'Yamaha Exciter 150',
                'description'=>'Exciter 150 là mẫu xe côn tay giá rẻ đáng để mua nhất tại thị trường Việt hiện nay.',
                'price'=>'47000000',
                'images'=>'https://muasamxe.com/wp-content/uploads/2017/06/exciter-150-1.jpg',
                'category'=>'Xe côn'
            ],[
                'name'=>'Honda Winner 150',
                'description'=>'Mẫu xe côn tay Honda Winner 2017 vừa bổ sung thêm 3 màu mới là cam, vàng và xanh da trời',
                'price'=>'45000000',
                'images'=>'https://muasamxe.com/wp-content/uploads/2017/06/honda-winner-150-2.jpg',
                'category'=>'Xe côn'
            ],[
                'name'=>'Suzuki Raider 150',
                'description'=>'Suzuki Raider R150 nằm trong phân khúc xe côn tay dưới 175 phân khối.',
                'price'=>'50000000',
                'images'=>'https://muasamxe.com/wp-content/uploads/2017/06/suzuki-raider-150-fi-15.jpg',
                'category'=>'Xe côn'
            ],[
                'name'=>'Brixton BX 125/150',
                'description'=>'Brixton BX 125 2017 sẽ có 3 phiên bản là Classic, Cafe Racer (BX 125 R) và Scrambler (BX 125 X).',
                'price'=>'55900000',
                'images'=>'https://muasamxe.com/wp-content/uploads/2017/06/brixton-bx-150-1-1.jpg',
                'category'=>'Xe côn'
            ],

            [
                'name'=>'Yamaha Sirius ',
                'description'=>'mẫu xe số phổ thông Yamaha Sirius bán chạy nhất phân khúc',
                'price'=>'22000000',
                'images'=>'https://znews-photo-td.zadn.vn/Uploaded/mfssa/2017_08_22/xs1.jpg',
                'category'=>'Xe số'
            ],[
                'name'=>'Honda Wave Alpha ',
                'description'=>'Mức giá rẻ và dễ sử dụng là những ưu điểm của dòng xe này.',
                'price'=>'17000000',
                'images'=>'https://znews-photo-td.zadn.vn/Uploaded/mfssa/2017_08_22/alpha2_zing.jpg',
                'category'=>'Xe số'
            ],[
                'name'=>'Honda Blade 110 ',
                'description'=>'Là dòng xe mới xuất hiện trên thị trường vài năm trở lại đây.',
                'price'=>'21100000',
                'images'=>'https://znews-photo-td.zadn.vn/Uploaded/mfssa/2017_08_22/xs3.jpg',
                'category'=>'Xe số'
            ],[
                'name'=>'Honda Wave RSX Fi ',
                'description'=>'Mẫu xe số Wave RSX Fi với động cơ phun xăng điện tử, kiểu dáng khỏe khoắn, thể thao khá thu hút người dùng nam giới.',
                'price'=>'24490000',
                'images'=>'https://znews-photo-td.zadn.vn/Uploaded/mfssa/2017_08_22/xs8.jpg',
                'category'=>'Xe số'
            ],

            [
                'name'=>'Belaz 75710',
                'description'=>'Dài hơn 20 mét, rộng 10 mét, cao hơn 8 mét, tải trọng 450 tấn',
                'price'=>'5000000',
                'images'=>'http://streaming1.danviet.vn/upload/3-2016/images/2016-07-03/146754236597004-xe-tai1.jpg',
                'category'=>'Xe tải'
            ],[
                'name'=>'The Caterpillar 797B',
                'description'=>'Cao 7.6 mét, dài 14.5 mét, tải trọng 380 tấn.',
                'price'=>'450000',
                'images'=>'http://streaming1.danviet.vn/upload/3-2016/images/2016-07-03/14675423652118-xe-tai2.jpg',
                'category'=>'Xe tải'
            ],[
                'name'=>'Terex MT6300AC',
                'description'=>'Dài 14.63 mét, cao 7.92 mét, trọng tải 400 tấn.',
                'price'=>'520000',
                'images'=>'http://streaming1.danviet.vn/upload/3-2016/images/2016-07-03/146754236548202-xe-tai3.jpg',
                'category'=>'Xe tải'
            ],[
                'name'=>'Liebherr T 284',
                'description'=>'Dài 15.69 mét, cao 7.42 mét, tải trọng 400 tấn.',
                'price'=>'5300000',
                'images'=>'http://streaming1.danviet.vn/upload/3-2016/images/2016-07-03/146754236526956-xe-tai4.jpg',
                'category'=>'Xe tải'
            ],

            [
                'name'=>'Aston Martin AM-RB 001',
                'description'=>'được thiết kế lấy cảm hứng từ xe đua F1, kết hợp giữa hãng xe Anh Quốc và đội đua Red Bull Racing.',
                'price'=>'2500000',
                'images'=>'https://znews-photo-td.zadn.vn/w960/Uploaded/zagtit/2016_08_15/AstonMartinRedBullAMRB001debut02.jpg',
                'category'=>'Xe đua'
            ],[
                'name'=>'Ferrari LaFerrari Aperta',
                'description'=>'LaFerrari Aperta mang những đặc tính vận hành tương tự như bản coupe, dù trọng lượng xe tăng lên. ',
                'price'=>'1300000',
                'images'=>'https://znews-photo-td.zadn.vn/w960/Uploaded/zagtit/2016_08_15/ferrarilaferrariapertac187111072016180349_9.jpg',
                'category'=>'Xe đua'
            ],[
                'name'=>'McLaren P1 LM',
                'description'=>'Là phiên bản nâng cấp của những chiếc P1, được sản xuất bởi Lanzante Motorsport.',
                'price'=>'1800000',
                'images'=>'https://znews-photo-td.zadn.vn/w960/Uploaded/zagtit/2016_08_15/McLarenXP1LM7_1.jpg',
                'category'=>'Xe đua'
            ],[
                'name'=>'Bugatti Vision GranTurismo',
                'description'=>'ao hơn so với Bugatti Chiron ra mắt cách đây không lâu. ',
                'price'=>'2200000',
                'images'=>'https://znews-photo-td.zadn.vn/w960/Uploaded/zagtit/2016_08_15/BugattiVisionGranTurismo1.jpg',
                'category'=>'Xe đua'
            ],
        ]);
    }
}
