<?php

namespace Database\Seeders;

use App\Models\Instrument;
use App\Models\User;
use Illuminate\Database\Seeder;

class InstrumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $instruments = [
            ['Oboe', 'Holzblasinstrumente'],
            ['Trompete', 'Blechblasinstrumente'],
            ['Posaune', 'Blechblasinstrumente'],
            ['Geige', 'Streicher'],
            ['Cello', 'Streicher'],
            ['Pauke', 'Schlagzeug'],
        ];

        foreach ($instruments as $instrument)
        {
            Instrument::factory()->create([
                'name' => $instrument[0],
                'group' => $instrument[1],
            ]);
        }

        $users = User::all();
        $instruments = Instrument::all();
        foreach ($users as $user)
        {
            $user->instruments()->attach(
                $instruments->random(rand(1,2))->pluck('id')
            );
        }
    }
}
