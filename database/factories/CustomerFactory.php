<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Customer;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name_customer' => $this->faker->name(),
            'phone_customer' => $this->faker->phoneNumber(),
            'email_customer' => $this->faker->unique()->safeEmail(),
            'address_customer' => $this->faker->address(),
            'city_customer' => $this->faker->city()
        ];
    }
}
