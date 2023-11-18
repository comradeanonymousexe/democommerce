<?php

// database/seeders/OrderDetailsTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OrderDetail;

class OrderDetailsTableSeeder extends Seeder
{
    public function run()
    {
        OrderDetail::factory(50)->create();
    }
}
