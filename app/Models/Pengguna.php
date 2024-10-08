<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasFactory;

    public function selfdiaries()
    {
        return $this->hasMany(Selfdiary::class, 'id');
    }

    protected $fillable = [
        'nama',
        'nis',
        'username',
        'password',
        'foto'
    ];
}
