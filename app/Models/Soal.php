<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Modul;

class Soal extends Model
{
    use HasFactory;

    protected $fillable = ['modul_id', 'soal', 'opsi_a', 'opsi_b', 'opsi_c', 'opsi_d', 'jawaban_benar'];

    public function modul()
    {
        return $this->belongsTo(Modul::class);
    }

    public function progress()
    {
        return $this->hasMany(ProgessPengguna::class);
    }
}
