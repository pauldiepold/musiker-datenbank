<?php

namespace Database\Seeders;

use App\Models\Ensemble;
use Illuminate\Database\Seeder;

class EnsembleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ensembles = [
            ['Niedersächsisches Jugendsinfonie-Orchester', 'NJO', 'Sinfonieorchester'],
            ['KIT Sinfonieorchester', '', 'Sinfonieorchester'],
            ['Collegium Musicum der TU und FU', 'CM', 'Sinfonieorchester'],
            ['KIT Kammerorchester', '', 'Kammerorchester'],
            ['Junge Philharmonie Karlsruhe', 'JuPhKa', 'Projektorchester'],
        ];

        foreach ($ensembles as $ensemble)
        {
            Ensemble::factory()->create([
                'name' => $ensemble[0],
                'short' => $ensemble[1],
                'type' => $ensemble[2],
            ]);
        }
    }
}
