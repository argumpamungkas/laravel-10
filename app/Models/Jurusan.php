<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;
    protected $table = 'jurusans';

    // one to many
    public function students()
    {
        return $this->hasMany(Student::class, 'jurusan_id', 'id');
    }

    public function lecturers()
    {
        return $this->belongsTo(Lecturer::class, 'lecturer_id', 'id');
    }
}
