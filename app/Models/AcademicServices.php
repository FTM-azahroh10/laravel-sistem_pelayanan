<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicServices extends Model
{
    use HasFactory;
    protected $table = 'academic_services';
    protected $fillable = ['nim', 'nama', 'jurusan', 'tanggal','email', 'status', 'keperluan', 'dokumen', 'code'];
    public $timestamps = true;
}
