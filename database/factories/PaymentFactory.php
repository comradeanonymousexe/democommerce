<?php

// database/factories/PaymentFactory.php

namespace Database\Factories;

use App\Models\Payment;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'order_id' => Order::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
            'type' => $this->faker->randomElement(['cash', 'credit_card']),
            'created_by' => User::factory(),
            'updated_by' => User::factory(),
        ];
    }
}
