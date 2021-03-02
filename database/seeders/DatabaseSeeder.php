<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            InstrumentSeeder::class,
            PieceSeeder::class,
            EnsembleSeeder::class,
            ConcertSeeder::class,
            PerformanceSeeder::class,
        ]);
    }
}
