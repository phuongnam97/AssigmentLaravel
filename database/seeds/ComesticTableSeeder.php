<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComesticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comestics')->truncate();
        DB::table('comestics')->insert([
            [
                'name'=>'Peach Kiss Moisture Matte Long Wear Lipstick – Peaches and Cream Collection',
                'description'=>'Anastasia Beverly Hills Matte Lipsticks are full pigment lip color with a smooth, ultra-matte finish.',
                'price'=>'400000',
                'category'=>'cosmetic',
                'images'=>'https://images.ulta.com/is/image/Ulta/2514542?$detail$',
                'content'=>'lipstick',
                'note'=>'abcxyz'
            ],
            [
                'name'=>'Colour Statement Moisture Matte Lipstick 4g',
                'description'=>'A non-drying, moisture infused matte lip colour. Easy to apply with comfortable, long lasting wear Colour Statement Moisture Matte Lipstick is the ideal formula for creating an on trend bold matte lip. The rich, suede-like texture applies smoothly for opaque, full coverage colour in just one sweep.',
                'price'=>'150000',
                'category'=>'cosmetic',
                'images'=>'https://images.beautybay.com/eoaaqxyywn6o/MILA-milanicolourstatementmattelipstick_1_gl.jpg/0938e3233a9853e41bdf2fe537cc2401/milanicolourstatementmattelipstick_1_gl.jpg?w=500&h=500&fm=jpg&fl=progressive',
                'content'=>'lipstick',
                'note'=>'abcdef'
            ]
        ]);
    }
}
