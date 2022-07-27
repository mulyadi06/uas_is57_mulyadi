<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    public function tujuans() {
        return $this->hasOne(Tujuan::class,'id','tujuans_id');
    }
}
