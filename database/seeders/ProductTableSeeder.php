<?php


// database/seeders/ProductsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        Product::factory(50)->create();
    }
}
