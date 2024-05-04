<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    protected $table = 'pengguna';

    protected $fillable = [
        'username',
        'password',
        'nama',
        'email',
        'no_hp',
        'alamat',
        'foto_profil',
    ];
}
