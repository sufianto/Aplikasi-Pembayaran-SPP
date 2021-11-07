<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Pembayaran;
use App\Models\Spp;
use App\Models\Kelas;
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
        
        User::create([
            'name' => 'admin',
            'email' => 'admin@spp.com',
            'password' => Hash::make('admin'),
            'level' => 'admin',
        ]);
        
        User::create([
            'name' => 'petugas',
            'email' => 'petugas@spp.com',
            'password' => Hash::make('petugas'),
            'level' => 'petugas',
        ]);

        Kelas::create([
            'nama_kelas' => 'XII RPL 2',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'
        ]);

        Spp::create([
            'bulan' => 'Mei',
            'nominal' => 500000
        ]);

        Siswa::create([
            'nisn' => '123456789876',
            'nis'  => '22373687',
            'nama' => 'siswa',
            'id_kelas' => 1,
            'password' => Hash::make('siswa'),
            'nomor_telp' => '089689957106',
            'alamat' => 'Majalengka',
            'id_spp' => 1
        ]);

        Pembayaran::create([
            'id_petugas' => 2,
            'id_siswa' => 1,
            'spp_bulan' => 'februari',
            'jumlah_bayar' => 150000
        ]);
    }
}
