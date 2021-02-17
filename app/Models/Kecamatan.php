<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    public function kota(){
        return $this->belongsTo('App\Models\Kota', 'id_kota');
    }

    public function kelurahan(){
        return $this->hasMany('App\Models\Kelurahan', 'id_kecamatan');
    }

    use HasFactory;
}
