<?php

namespace Database\Factories;

use App\Models\Student\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Student::class;



    public function definition()
    {
        return [
           'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'contact' => $this->faker->numerify('##########'), // Generate a 10-digit phone number
            'address' => $this->faker->address,
            'session' => $this->faker->randomElement(['Morning', 'Day', 'Evening']),
            'age' => $this->faker->date($format = 'Y-m-d', $max = 'now'), // Generate a date
            'gender' => $this->faker->randomElement(['male', 'female']),
        ];

    }
}
