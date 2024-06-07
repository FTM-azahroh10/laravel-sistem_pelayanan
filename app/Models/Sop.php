<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sop extends Model
{
    use HasFactory;
    protected $table = 'sop';
    protected $fillable = ['kategori','deskripsi','tahun'];
    public $timestamps = true;
}
