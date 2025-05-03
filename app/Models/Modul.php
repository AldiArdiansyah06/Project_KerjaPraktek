<?php

namespace App\Models;

use App\Models\Kursus;
use Illuminate\Database\Eloquent\Model;
use App\Models\Soal;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Modul extends Model
{
    use HasFactory;

    protected $fillable = ['judul', 'deskripsi', 'file'];

    public function soal()
    {
        return $this->hasMany(Soal::class);
    }

    public function progress()
    {
        return $this->hasMany(ProgessPengguna::class);
    }
}
