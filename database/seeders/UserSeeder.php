<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Paul',
            'email' => 'paul@paul.de',
            'password' => Hash::make('testtest'),
        ]);
        User::factory()->create([
            'name' => 'Sebbo',
            'email' => 'sebbo@sebbo.de',
            'password' => Hash::make('testtest'),
        ]);
    }
}
