<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';

    protected $fillable = [
        'users_id',
        'judul',
        'deskripsi',
        'tanggapan_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function tanggapan()
    {
        return $this->hasOne(Tanggapan::class, 'tanggapan_id');
    }
}
