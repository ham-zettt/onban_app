<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    use HasFactory;
    protected $table = 'pekerja';

    protected $fillable = [
        'username',
        'nama',
        'email',
        'password',
        'alamat',
        'no_hp',
        'foto_formal',
        'foto_ktp',
        'status_menerima_order',
        'status_verifikasi',
        'latitude',
        'longitude',
        'jenis_kelamin'
    ];
}
