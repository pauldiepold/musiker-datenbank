<?php

namespace Database\Factories;

use App\Models\Concert;
use App\Models\Ensemble;
use App\Models\Instrument;
use App\Models\Performance;
use App\Models\Piece;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PerformanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Performance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'part' => rand(1,5),
            'user_id' => User::factory(),
            'concert_id' => Concert::factory(),
            'piece_id' => Piece::factory(),
            'instrument_id' => Instrument::factory(),
            'ensemble_id' => Ensemble::factory(),
        ];
    }
}
