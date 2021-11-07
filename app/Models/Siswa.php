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
        'nisn', 'nis', 'nama', 'id_kelas', 'nomor_telp', 'alamat', 'id_spp'
   ];
  
  /**
  * Belongs To Siswa -> Spp
  *
  * @return void
  */
   public function spps()
   {
        return $this->belongsTo(Spp::class,'id_spp','id');
   }
  
  public function pembayarans(){
       return  $this->hasMany(Pembayaran::class,'id_spp');
  }
  
   public function kelass(){
       return  $this->belongsTo(Kelas::class,'id_kelas');
  }
}
