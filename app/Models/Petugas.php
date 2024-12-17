<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Petugas extends Authenticatable
{
     protected $table = 'petugas';

    protected $fillable = [
        'nama',
        'kelamin',
        'email',
        'username',
        'password',
    ];

    public function tanggapan()
    {
        return $this->hasMany(Tanggapan::class, 'tanggapan_id');
        
    }
}
