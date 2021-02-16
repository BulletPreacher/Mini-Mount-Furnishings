<?php

use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => "Chair",
                'description' => 'This is a cool chair, you can sit on it too',
                'stock' => 5,
                'price' => 1500.00,
                'image' => 'https://tvguide1.cbsistatic.com/feed/1/896/thumbs/92315896_c375x708+520+0_375x708.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],

            [
                'name' => "Lamp",
                'description' => 'This is a cool lamp, you can turn it on too',
                'stock' => 5,
                'price' => 500.00,
                'image' => 'https://tvguide1.cbsistatic.com/feed/1/896/thumbs/92315896_c375x708+520+0_375x708.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],

            [
                'name' => "Table",
                'description' => 'This is a cool table, you can put stuff in it too',
                'stock' => 5,
                'price' => 3000.00,
                'image' => 'https://tvguide1.cbsistatic.com/feed/1/896/thumbs/92315896_c375x708+520+0_375x708.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],

            [
                'name' => "Shelf",
                'description' => 'This is a cool shelf, you can put stuff on it too',
                'stock' => 5,
                'price' => 2000.00,
                'image' => 'https://tvguide1.cbsistatic.com/feed/1/896/thumbs/92315896_c375x708+520+0_375x708.jpg',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],

            ];


        \Illuminate\Support\Facades\DB::table('product_models')->insert($products);
    }
}
