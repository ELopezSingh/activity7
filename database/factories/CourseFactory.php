<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RoboticsKit;

class CourseFactory extends Factory
{
    public function definition(): array
    {
        return [
            'course_key' => $this->faker->unique()->bothify('Rob###'), 
            'title' => $this->faker->sentence(4),
            'cover' => $this->faker->imageUrl(640, 480, 'education', true), 
            'content' => $this->faker->paragraphs(3, true),
            'robotics_kit_id' => $this->faker->numberBetween(1, 3), 
        ];
    }
}