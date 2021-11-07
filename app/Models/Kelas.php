<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table = 'kelass';
   
    protected $fillable = [
          'nama_kelas', 'kompetensi_keahlian'
    ];
}
