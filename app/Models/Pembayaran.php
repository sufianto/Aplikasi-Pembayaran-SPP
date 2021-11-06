<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
     protected $table = 'pembayarans';
    protected $fillable = [
        'tgl_bayar',
        'bulan_dibayar',
        'tahun_dibayar',
        'jumlah_bayar',
        'id_petugas',
        'nisn',
    ];
            public function petugas()
    {
        return $this->belongsTo(Petugas::class);
    }
            public function siswa()
    {
        return $this->belongsTo(Siswa::class);
    }

}
