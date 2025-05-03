<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgessPengguna extends Model
{
    /** @use HasFactory<\Database\Factories\ProgessPenggunaFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'modul_id', 'soal_id', 'jawaban_pengguna', 'status', 'nilai'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function modul()
    {
        return $this->belongsTo(Modul::class);
    }

    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }
}
