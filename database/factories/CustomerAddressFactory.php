<?php

// database/factories/CustomerAddressFactory.php

namespace Database\Factories;

use App\Models\CustomerAddress;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerAddressFactory extends Factory
{
    protected $model = CustomerAddress::class;

    public function definition()
    {
        return [
            'type' => $this->faker->randomElement(['billing', 'shipping']),
            'address1' => $this->faker->streetAddress,
            'address2' => $this->faker->secondaryAddress,
            'city' => $this->faker->city,
            'state' => $this->faker->state,
            'zipcode' => $this->faker->postcode,
            'country_code' => \App\Models\Country::factory()->create()->code,
            'customer_id' => \App\Models\Customer::factory()->create(),
        ];
    }
}
