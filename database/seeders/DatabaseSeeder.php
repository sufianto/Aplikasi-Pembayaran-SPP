<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Siswa::factory(10)->create();
        Siswa::create([
            'nipd' => '123451',
            'password' => Hash::make('password'),
        ]);
    }
}
