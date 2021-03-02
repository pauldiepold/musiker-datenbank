<?php

namespace Database\Factories;

use App\Models\Composer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComposerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Composer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'surname' => $this->faker->name,
            'name' => $this->faker->name,
            'genre' => $this->faker->colorName,
            'year_of_birth' => $this->faker->year,
            'year_of_death' => $this->faker->year,
        ];
    }
}
