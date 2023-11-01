<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScaleParameterAge extends Model
{
    use HasFactory;

    protected $table = 'scale_parameter_age';

    protected $fillable = [
        'code',
        'name',
        'status',
    ];

}
