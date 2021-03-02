<?php

namespace Database\Seeders;

use App\Models\Concert;
use App\Models\Ensemble;
use App\Models\Performance;
use App\Models\Piece;
use App\Models\User;
use Illuminate\Database\Seeder;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pieces = Piece::all();
        $concerts = Concert::all();
        $ensembles = Ensemble::all();
        $users = User::all();

        foreach ($concerts as $concert)
        {
            for ($i = 0; $i < rand(2, 4); $i++)
            {
                $user = $users->random();
                Performance::factory()->create([
                    'part' => rand(1, 2),
                    'user_id' => $user->id,
                    'concert_id' => $concert->id,
                    'piece_id' => $pieces->random()->id,
                    'instrument_id' => $user->instruments->random()->id,
                    'ensemble_id' => $ensembles->random()->id,
                ]);

            }
        }
    }
}
