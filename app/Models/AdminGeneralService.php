<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminGeneralService extends Model
{
    use HasFactory;
    protected $table = 'general_service';
    protected $fillable = ['nim', 'nama', 'jurusan', 'tanggal', 'email', 'status', 'keperluan'];
    public $timestamps = true;
}
