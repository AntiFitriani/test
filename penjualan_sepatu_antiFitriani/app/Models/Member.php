<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_member',
        'alamat',
        'no_tlp'
    ];
    public function member(){
        return $this->hasMany(Member::class, 'id_member', 'id');
    }
}
