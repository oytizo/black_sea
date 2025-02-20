<?php

namespace Database\Factories;

use App\Models\Course\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Course::class;

    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Computer Science', 'Software Engineering', 'Information Technology', 'Computer Engineering', 'Computer Application']),
            'code' => $this->faker->randomElement(['CS', 'SE', 'IT', 'CE', 'CA']),
            'fee' => $this->faker->randomElement([10000, 20000, 30000, 40000, 50000]),
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
            'duration' => $this->faker->randomElement(['3 Months', '6 Months', '1 Year', '2 Years', '3 Years']),
        ];
    }
}
