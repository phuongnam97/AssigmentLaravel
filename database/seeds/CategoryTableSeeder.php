<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'name'=>'Xe tay ga',
                'description'=>'Xe không dùng côn và số'
            ],
            [
                'name'=>'Xe côn',
                'description'=>'Xe đẹp'
            ],
            [
                'name'=>'Xe số',
                'description'=>'Xe máy phổ biến tại Việt Nam'
            ],[
                'name'=>'Xe tải',
                'description'=>'Xe để chở vật liệu'
            ],[
                'name'=>'Xe đua',
                'description'=>'Xe để đua F1'
            ]
        ]);
    }
}
