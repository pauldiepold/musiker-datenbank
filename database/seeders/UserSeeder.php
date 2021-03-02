<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'Paul',
            'Sebbo',
            'Benni',
            'Tristan',
            'Jakob',
            'Amelie',
            'Leoni',
        ];

        foreach ($users as $user)
        {
            User::factory()->create([
                'name' => $user,
                'email' => Str::lower($user) . '@' . Str::lower($user) . '.de',
                'password' => Hash::make('test'),
            ]);
        }
    }
}
