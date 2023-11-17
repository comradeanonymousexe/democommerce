<?php

// database/seeders/CustomersTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomersTableSeeder extends Seeder
{
    public function run()
    {
        // Create 30 customer records
        Customer::factory(30)->create();
    }
}
