<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable =[
        'nama_supplier', 
        'nama_perusahaan',
        'alamat',
        'no_tlp_supplier',
        'no_tlp_perusahaan'
    ];
    public function supplier(){
        return $this->hasMany(Supplier::class, 'id_supplier', 'id');
    }
}
