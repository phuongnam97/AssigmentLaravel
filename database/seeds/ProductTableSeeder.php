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
                'name'=>'Peach Kiss Moisture Matte Long Wear Lipstick – Peaches and Cream Collection',
                'description'=>'Start by applying Lip Insurance Lip Primer all over lips for the perfect base. Then, blend multiple Peach Kiss colors together to create an ombré effect.',
                'price'=>'200000',
                'images'=>'https://www.sephora.com/productimages/sku/s1961291-main-thumb-50.jpg',
                'category'=>'Lipstick'
            ],
            [
                'name'=>'Everlasting Liquid Lipstick',
                'description'=>'A long-wear, high-pigment liquid lipstick with a smooth, matte finish and all-day, lightweight comfort.',
                'price'=>'260000',
                'images'=>'https://www.sephora.com/productimages/sku/s1890623-main-thumb-50.jpg',
                'category'=>'Lipstick'
            ],
            [
                'name'=>'Cream Lip Stain Liquid Lipstick',
                'description'=>'A silky, long-lasting lip stain that keeps lips covered with bold color from AM to PM—no need to reapply or touch up throughout the day. ',
                'price'=>'500000',
                'images'=>'https://www.sephora.com/productimages/sku/s1959535-main-thumb-50.jpg',
                'category'=>'Lipstick'
            ],[
                'name'=>'Mattemoiselle Plush Matte Lipstick',
                'description'=>'An ultra-slim lipstick with a long-wearing, petal-soft matte finish, created in a rainbow of weightless, color-intense shades designed to flatter all skin tones. ',
                'price'=>'360000',
                'images'=>'https://www.sephora.com/productimages/sku/s2018224-main-thumb-50.jpg',
                'category'=>'Lipstick'
            ],

            [
                'name'=>'Matcha mousse cake',
                'description'=>'Good matcha cake',
                'price'=>'300000',
                'images'=>'https://www.bbcgoodfood.com/sites/default/files/recipe-collections/collection-image/2013/05/matcha-mousse-cake.jpg',
                'category'=>'Cake'
            ],[
                'name'=>'Pimm\'s cake',
                'description'=>'Good Pimm\'s cake',
                'price'=>'400000',
                'images'=>'https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2016/07/pimms-cake.jpg?itok=Jfan_PED',
                'category'=>'Cake'
            ],[
                'name'=>'Black tahini chocolate cookies',
                'description'=>'Good cookies',
                'price'=>'200000',
                'images'=>'https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2016/06/black-tahini-chocolate-cookies.jpg?itok=DK-mHpd4',
                'category'=>'Cake'
            ],[
                'name'=>'Lemon drizzle slices',
                'description'=>'Good Lemon drizzle slices',
                'price'=>'150000',
                'images'=>'https://www.bbcgoodfood.com/sites/default/files/styles/recipe/public/recipe/recipe-image/2016/06/lemon-drizzle-slices.jpg?itok=RbEfdaQL',
                'category'=>'Cake'
            ],

            [
                'name'=>'Laptop Asus ROG HERO GL503VD-GZ119T, GTX1050 4G/Win 10',
                'description'=>'Good laptop',
                'price'=>'27000000',
                'images'=>'https://hanoicomputercdn.com/media/product/38762_1.jpg',
                'category'=>'Laptop Gaming'
            ],[
                'name'=>'Laptop ASUS Gaming FX503VD- E4119T',
                'description'=>'Good laptop',
                'price'=>'25000000',
                'images'=>'https://hanoicomputercdn.com/media/product/38367_1.jpg',
                'category'=>'Laptop Gaming'
            ],[
                'name'=>'Laptop Asus GM501GS-EI004T i7 8750HQ/16GB/1TB+SSH8G+512SSD/15.6 FHD/1070 8G/Win10',
                'description'=>'Great Laptop',
                'price'=>'64000000',
                'images'=>'https://hanoicomputercdn.com/media/product/42115_gm501gs_1.jpg',
                'category'=>'Laptop Gaming'
            ],[
                'name'=>'Laptop MSI GAMING GT75 Titan 8RF CoffeeLake Core i7/Win 10',
                'description'=>'Great Laptop',
                'price'=>'79000000',
                'images'=>'https://hanoicomputercdn.com/media/product/41917_1.png',
                'category'=>'Laptop Gaming'
            ],

            [
                'name'=>'2017 Lamborghini Aventador S',
                'description'=>'Great Car',
                'price'=>'20000000000',
                'images'=>'https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/01/Lamborghini-Aventador-S-101.jpg?crop=1xw:1xh;center,center&resize=884:*',
                'category'=>'Car'
            ],[
                'name'=>'2019 Lamborghini Urus',
                'description'=>'Great Car',
                'price'=>'8000000000',
                'images'=>'https://hips.hearstapps.com/hmg-prod/images/2019-lamborghini-urus-99leadgallery-1524865729.jpg?crop=1xw:1xh;center,center&resize=884:*',
                'category'=>'Car'
            ],[
                'name'=>'2019 Lamborghini Urus 2',
                'description'=>'Great Car',
                'price'=>'8000000000',
                'images'=>'https://hips.hearstapps.com/hmg-prod/images/2019-lamborghini-urus-125-1524865734.jpg?crop=1xw:1xh;center,center&resize=884:*',
                'category'=>'Car'
            ],[
                'name'=>'2017 Lamborghini Aventador S 2',
                'description'=>'Great Car',
                'price'=>'15000000000',
                'images'=>'https://hips.hearstapps.com/amv-prod-cad-assets.s3.amazonaws.com/wp-content/uploads/2017/01/Lamborghini-Aventador-S-115.jpg?crop=1xw:1xh;center,center&resize=884:*',
                'category'=>'Car'
            ],

            [
                'name'=>'Honda blade',
                'description'=>'Good motorbike',
                'price'=>'25000000',
                'images'=>'http://dragonbiketours.com/assets/img/honda-wave-rs.png',
                'category'=>'Motorbike'
            ],[
                'name'=>'Yamaha exciter',
                'description'=>'Good motorbike',
                'price'=>'25000000',
                'images'=>'http://dragonbiketours.com/assets/img/bikes/yamaha-exciter.jpg',
                'category'=>'Motorbike'
            ],[
                'name'=>'Honda Futer FI',
                'description'=>'Good motorbike',
                'price'=>'25000000',
                'images'=>'http://dragonbiketours.com/assets/img/bikes/honda-future-fi.jpg',
                'category'=>'Motorbike'
            ],[
                'name'=>'Honda XR 150',
                'description'=>'Good motorbike',
                'price'=>'25000000',
                'images'=>'http://dragonbiketours.com/assets/img/bikes/honda-xr.jpg',
                'category'=>'Motorbike'
            ],
        ]);
    }
}
