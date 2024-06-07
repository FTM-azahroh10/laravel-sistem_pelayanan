<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminStudentService extends Model
{
    use HasFactory;
    protected $table = 'student_service';
    protected $fillable = ['nim', 'nama', 'jurusan','tanggal','email', 'status', 'keperluan'];
    public $timestamps = true;
}
