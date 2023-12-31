<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CustomersTableSeeder::class,
            CountriesTableSeeder::class,
            CustomerAddressesTableSeeder::class,
            OrdersTableSeeder::class,
            OrderItemsTableSeeder::class,
            ProductTableSeeder::class,
            PaymentsTableSeeder::class,
            OrderDetailsTableSeeder::class,
            UserTableSeeder::class,
            CartItemsTableSeeder::class
            // Add more seeders as needed
        ]);
    }
}
