<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunLatihanSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'siswa@example.test'],
            [
                'name' => 'Siswa Latihan',
                'password' => Hash::make('BelajarAPI123!'),
            ]
        );
    }
}
