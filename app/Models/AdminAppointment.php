<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAppointment extends Model
{
    use HasFactory;
    protected $table = 'appointments';
    protected $fillable = ['nama', 'email', 'service', 'start_appointment', 'end_appointment', 'code', 'tanggal'];
    public $timestamps = true;
}
