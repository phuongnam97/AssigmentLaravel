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
                'name'=>'Lipstick',
                'description'=>'Lipstick for women'
            ],
            [
                'name'=>'Cake',
                'description'=>'Cake to eat'
            ],
            [
                'name'=>'Laptop Gaming',
                'description'=>'Laptop to play'
            ],[
                'name'=>'Car',
                'description'=>'Car to drive'
            ],[
                'name'=>'Motorbike',
                'description'=>'Motorbike to ride'
            ]
        ]);
    }
}
