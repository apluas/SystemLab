<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigInterpretationParameter extends Model
{
    use HasFactory;

    protected $table = 'config_interpretation_templates';

    protected $fillable = [
        'code',
        'name',
        'status',
    ];

}
