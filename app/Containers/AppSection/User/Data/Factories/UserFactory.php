<?php

namespace App\Containers\AppSection\User\Data\Factories;

use App\Containers\AppSection\User\Models\User;
use Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = User::class;
    public function definition()
    {
        return [
            'f_name' => $this->faker->firstName(),
            'l_name' => $this->faker->lastName(),
            'm_name' => $this->faker->lastName(),
            'birthday' => $this->faker->date(),
            'password' => Hash::make($this->faker->password()),
            'email' => $this->faker->unique()->safeEmail(),
            'image' => $this->faker->image(),
        ];
    }
}
