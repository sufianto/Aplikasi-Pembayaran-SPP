<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spps';
   
    protected $fillable = [
         'bulan', 'nominal'
    ];
   
    /**
   * Belongs To Spp -> Petugas
   *
   * @return void
   */
   public function users()
   {
         return $this->belongsTo(User::class);
   }
}
