<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminFinancialService extends Model
{
    use HasFactory;
    protected $table = 'financial_services';
    protected $fillable = ['nim', 'nama', 'jurusan', 'tanggal', 'status', 'keperluan'];
    public $timestamps = true;
}
