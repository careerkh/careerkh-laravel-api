<?php

namespace Database\Factories;

use App\Models\Career;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Career>
 */
class CareerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Career::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'position' => $this->faker->title,
            'href' => $this->faker->url,
            'industry' => $this->faker->jobTitle,
            'description' => $this->faker->realTextBetween,
            'caption' => $this->faker->sentence,
            'term' => $this->faker->creditCardType,
            'location' => $this->faker->streetAddress,
            'salary' => $this->faker->numerify,
            'date' => $this->faker->dateTime,
            'imageUrl' => $this->faker->imageUrl,

        ];
    }
}