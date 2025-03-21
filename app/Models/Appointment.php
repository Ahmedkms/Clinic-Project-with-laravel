<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    protected $fillable = [
       'patient_name',
       'patient_phone',
       'patient_email',
       'appointment_date',
       'appointment_time',
       'status'            
    ];
}
