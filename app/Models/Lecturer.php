<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the Lecturer
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jurusans()
    {
        return $this->hasOne(Jurusan::class, 'lecturer_id', 'id');
    }
}
