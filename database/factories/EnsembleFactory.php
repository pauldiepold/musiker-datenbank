<?php

namespace Database\Factories;

use App\Models\Ensemble;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnsembleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ensemble::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'type' => $this->faker->jobTitle,
        ];
    }
}
