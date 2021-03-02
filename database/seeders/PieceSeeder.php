<?php

namespace Database\Seeders;

use App\Models\Composer;
use App\Models\Piece;
use Illuminate\Database\Seeder;

class PieceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $composers = [
            ['Gustav', 'Mahler', 'Spätromantik'],
            ['Johannes', 'Brahms', 'Spätromantik'],
            ['Johann Sebastian', 'Bach', 'Barock'],
            ['Wolfgang Amadeus', 'Mozart', 'Klassik'],
            ['Dmitri', 'Shostakovich', 'Moderne'],
        ];
        $pieces = [
            ['Sinfonie Nr. 4', 1],
            ['Lieder eines fahrenden Gesellen', 1],
            ['Sinfonie Nr. 1', 2],
            ['Violinkonzert', 2],
            ['Tripelkonzert', 3],
            ['Ouvertüre zur Hochzeit des Figaros', 4],
            ['Sinfonie Nr. 32', 4],
            ['Sinfonie Nr. 10', 5],
            ['Suite für Variete-Orchester', 5],
        ];

        foreach ($composers as $composer)
        {
            Composer::factory()->create([
                'surname' => $composer[0],
                'name' => $composer[1],
                'genre' => $composer[2],
            ]);
        }

        foreach ($pieces as $piece)
        {
            Piece::factory()->create([
                'name' => $piece[0],
                'composer_id' => $piece[1],
            ]);
        }

    }
}
