<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeParameterTemplate extends Model
{
    use HasFactory;

    protected $table = 'type_parameter_template';

    // ->registra las configuracion que pueden realizarse a los parametros

    protected $fillable = [
        'code',
        'name',
        'status',
    ];

}
