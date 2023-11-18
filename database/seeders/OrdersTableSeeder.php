<?php

// database/seeders/OrdersTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        Order::factory(30)->create();
    }
}
