<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Petugas;
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
            'nama' => 'ali',
            'nisn' => '123456',
            'kelas' => 'XII RPL 3',
            'telepon' => '07391237',
            'email' => 'pradypta@gmail.com',
            'password' => Hash::make('password'),
            'id_spp' => '1',
        ]);
        Petugas::create([
            'nama' => 'kukuh',
            'email' => 'kukuh@gmail.com',
            'username' => '3123214',
            'password' => Hash::make('password'),
        ]);
    }
}
