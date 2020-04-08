<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
            [
            'name' => 'cello gripper',
            'category' => 'stationary',
            'price' => '10',
            'stock' => 100,
        ],
        [
            'name' => 'Oreo',
            'category' => 'Snacks',
            'price' => '30',
            'stock' => 150,
        ],
            ]
    );
    }
}
