<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $fillable = ['nama', 'semester', 'sks_teori', 'sks_praktikum', 'jurusan_id'];

    public function nilai()
    {
        return $this->hasMany(Nilai::class, 'matakuliah_id');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }
}
