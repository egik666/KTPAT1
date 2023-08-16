<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    protected $fillable = ['nama', 'jenjang'];

    public function matakuliah()
    {
        return $this->hasMany(Matakuliah::class, 'jurusan_id');
    }
}
