<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_kasir',
        'id_member',
        'id_sepatu',
        'tgl_bayar',
        'jumlah_bayar'
    ];
    public function user(){
        return $this->belongsTo(User::class, 'id_kasir', 'id');
    }
    public function member(){
        return $this->belongsTo(Member::class, 'id_member', 'id');
    }
    public function sepatu(){
        return $this->belongsTo(Sepatu::class, 'id_sepatu', 'id');
    }
}
