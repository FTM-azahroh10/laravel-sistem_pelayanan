<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ijazah extends Model
{
    use HasFactory;
    protected $table = 'ijazah';
    protected $fillable = ['nama','nim','jurusan','download','start_appointment','end_appointment'];
    // public $timestamps = false;
}
