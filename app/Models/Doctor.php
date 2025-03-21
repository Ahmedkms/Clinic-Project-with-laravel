<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    //filliable
    protected $fillable = [
        'name',
        'specialization',
        'email',
        'phone',
        'image'
    ];
}
