<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medics extends Model
{
    use HasFactory;

    protected $table = 'medics';

    protected $fillable = [
        'name',
        'email',
        'identification',
        'references',
        'tbl_specialty',
        'address',
        'dni_medic',
        'city',
        'phone',
        'phone_fixed',
        'portal_exams',
        'portal_results',
        'status_api',
        'created_by_user',
    ];
}
