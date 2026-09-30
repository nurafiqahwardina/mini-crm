<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name'  => fake()->lastName(),
            'company_id' => Company::factory(),
            'email'      => fake()->safeEmail(),
            'phone'      => fake()->phoneNumber(),
        ];
    }
}