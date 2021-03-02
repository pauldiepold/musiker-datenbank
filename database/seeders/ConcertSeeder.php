<?php

namespace Database\Seeders;

use App\Models\Concert;
use Illuminate\Database\Seeder;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $concerts = [
            ['10. Philharmonisches Konzert', 'Karlsruhe'],
            ['Mozart und Bach Bla Bla', 'Berlin'],
            ['Mahler 4 mit dem NJO', 'Hannover'],
            ['Beethoven Konzert', 'Berlin'],
        ];

        foreach ($concerts as $concert)
        {
            Concert::factory()->create([
                'title' => $concert[0],
                'place' => $concert[1],
            ]);
        }
    }
}
