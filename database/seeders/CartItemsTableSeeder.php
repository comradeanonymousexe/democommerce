<?php

// database/seeders/CartItemsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CartItem;

class CartItemsTableSeeder extends Seeder
{
    public function run()
    {
        CartItem::factory(30)->create();
    }
}
