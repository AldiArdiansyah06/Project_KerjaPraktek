<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $fillable = ['judul', 'deskripsi'];

    public function modul()
    {
        return $this->hasMany(Modul::class);
    }
}
