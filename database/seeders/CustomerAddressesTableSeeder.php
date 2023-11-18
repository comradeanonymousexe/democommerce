<?php
// database/seeders/CustomerAddressesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CustomerAddress;
use App\Models\Country; // Make sure to import the Country model

class CustomerAddressesTableSeeder extends Seeder
{
    public function run()
    {
        // Seed countries table

        // Create 30 customer address records
        CustomerAddress::factory(30)->create();
    }
}
