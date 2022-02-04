<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    public function barang(){
        return $this->belongsTo('App\Models\Barang', 'barang_id', 'id');
    }
}
