<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Selfdiary extends Model
{
    use HasFactory;

    //belongs to Pengguna
    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'id');
    }

    protected $date = [
        'tanggal' => 'date:Y-m-d',
    ];

    protected $fillable = [
        'judul',
        'id',
        'isi',
        'tanggal'
    ];

    protected $primaryKey = 'id_diary';
}
