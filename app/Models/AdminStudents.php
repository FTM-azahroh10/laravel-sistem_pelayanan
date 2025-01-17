<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminStudents extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['nim', 'nama', 'jurusan','email', 'tanggal'];
    public $timestamps = true;
}
