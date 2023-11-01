<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    use HasFactory;

    protected $table = 'genders';

    protected $fillable = [
        'code',
        'name',
        'status',
    ];

}
