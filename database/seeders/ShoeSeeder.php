<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShoeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // $table->id();
        // $table->string("ShoeName");
        // $table->string("Price");
        // $table->string("ShoeGender");
        // $table->string("Description");
        // $table->string("Gallery");
        // $table->timestamps();

        DB::table('shoe')->insert([
            'ShoeName' => 'Adidas NMD',
            'Price' => '250',
            'ShoeGender' => 'Female',
            'Description' => 'Good For Running',
            'Gallery' => 'https://www.adidas.co.id/media/catalog/product/cache/3bec5fdb79d91223b1a151be2b21ce8d/i/e/ie7345_2_footwear_photography_side20lateral20view_grey.jpg'
        ]);

        DB::table('shoe')->insert([
            'ShoeName' => 'Adidas Ultraboost',
            'Price' => '400',
            'ShoeGender' => 'Male',
            'Description' => 'Good For Exercise',
            'Gallery' => 'https://www.footlocker.id/media/catalog/product/cache/e81e4f913a1cad058ef66fea8e95c839/0/1/01-ADIDAS-F34RUADI5-ADIHQ6351-White.jpg'
        ]);

        DB::table('shoe')->insert([
            'ShoeName' => 'Air Jordans',
            'Price' => '150',
            'ShoeGender' => 'Male',
            'Description' => 'Good For Basketball',
            'Gallery' => 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/9d3fb63f-5493-47bd-afd6-487d87b2faaa/air-jordan-1-retro-high-og-craft-shoes-5mGWrz.png'
        ]);

        DB::table('shoe')->insert([
            'ShoeName' => 'Air Hordans',
            'Price' => '550',
            'ShoeGender' => 'Male',
            'Description' => 'Good For Baseball',
            'Gallery' => 'https://images.asos-media.com/products/air-jordan-1-retro-hi-trainers-in-grey-black/202922928-4?$n_640w$&wid=513&fit=constrain'
        ]);

        DB::table('shoe')->insert([
            'ShoeName' => 'Adidas AMD',
            'Price' => '1000',
            'ShoeGender' => 'Female',
            'Description' => 'Good For Everything',
            'Gallery' => 'https://5.imimg.com/data5/SELLER/Default/2022/4/GM/DF/NM/151793842/new-product.jpeg'
        ]);
    }
}
