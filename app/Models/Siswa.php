<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Siswa extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'siswas';

    protected $fillable = [
        'nama',
        'nisn',
        'kelas',
        'alamat',
        'telepon',
        'email',
        'password',
        'id_spp',
    ];
        public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
        public function spp()
    {
        return $this->belongsTo(Spp::class);
    }
        public function pembayaran()
    {
        return $this->hasMany(Pembayaran::class);
    }

}
