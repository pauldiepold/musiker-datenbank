<?php

namespace Database\Factories;

use App\Models\Composer;
use App\Models\Piece;
use Illuminate\Database\Eloquent\Factories\Factory;

class PieceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Piece::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'composer_id' => Composer::factory()
        ];
    }
}
