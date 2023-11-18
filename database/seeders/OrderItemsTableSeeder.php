<?php

// database/seeders/OrderItemsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderItem;

class OrderItemsTableSeeder extends Seeder
{
    public function run()
    {
        OrderItem::factory(50)->create();
    }
}
