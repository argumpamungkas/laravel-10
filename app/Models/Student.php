<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // PENGGUNAAN DIBAWAH JIKA:
    //protected $table = 'my_students'; // digunakan selama nama tablenya bukan plural
    //protected $primaryKey = 'std_id'; // digunakan jika primarykeynya bukan id
    //public $incrementing = false; // untuk ngasih tau jika table nya buka auto_increment maka di false kan
    //public $timestamps = false; // jika dalam table tidak ada created_at dan updated_at
}
