<?php

// database/seeders/CountriesTableSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        // Add necessary country data
        Country::factory()->count(30)->create(); // Adjust the count as needed
    }
}
