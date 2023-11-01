<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceAgeParameterDetails extends Model
{
    use HasFactory;

    protected $table = 'reference_age_parameter_details';

    // configuracion de los parametros por edad, cabecera, 'tbl_reference_age_parameter_main' id
    // configuracion de los parametros por edad, tabla de la escala de edades, 'tbl_scale_parameter_age' id

    protected $fillable = [
        'tbl_reference_age_parameter_main',
        'tbl_scale_parameter_age',
        'scale_from',
        'scale_up',
        'value_min',
        'value_max',
        'value_min_critical',
        'value_max_critical',
        'range_age',
        'refer',
        'refer_crit',
        'status',
    ];

}
