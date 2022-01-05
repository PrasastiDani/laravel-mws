<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('products')->insert([
            'id'=>1,
            'categories_id'=>1,
            'nama'=>'TV Samsung 45 inch',
            'harga'=> 2500000
        ]);

        \DB::table('products')->insert([
            'id'=>2,
            'categories_id'=>1,
            'nama'=>'TV LG 29 inch',
            'harga'=> 1500000
        ]);

        \DB::table('products')->insert([
            'id'=>3,
            'categories_id'=>1,
            'nama'=>'TV Sony 45 inch',
            'harga'=> 3500000
        ]);
    }
}