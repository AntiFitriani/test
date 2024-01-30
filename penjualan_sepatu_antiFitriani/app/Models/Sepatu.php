<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepatu extends Model
{
    use HasFactory;
    protected $fillable =[
        'id_supplier',
        'nama_sepatu',
        'merk',
        'warna',
        'stok',
        'foto'
    ];
    public function sepatu(){
        return $this->hasMany(Sepatu::class, 'id_sepatu', 'id');
    }

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'id_supplier', 'id');
    }
}
