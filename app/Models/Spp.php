<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spp extends Model
{
    protected $table = 'spps';
    protected $fillable = [
        'tahun',
        'nominal',
    ];
            public function spp()
    {
        return $this->hasMany(Spp::class);
    }
}
