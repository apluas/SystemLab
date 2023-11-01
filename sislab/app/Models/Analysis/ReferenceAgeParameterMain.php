<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Models\Analysis\ReferenceAgeParameterDetails;

class ReferenceAgeParameterMain extends Model
{
    use HasFactory;

    protected $table = 'reference_age_parameter_main';

    // configuracion de los parametros por edad, la tabla de parametros de la configuracion, 'tbl_exams_templates_parameters' id
    // configuracion de los parametros por edad, la tabla principal de la configuracion, 'tbl_exams_templates_main' id

    protected $fillable = [
        'tbl_exams_templates_parameters',
        'tbl_exams_templates_main',
        'status',
    ];

    public function getAll()
    {
        return $this->hasMany(ReferenceAgeParameterDetails::class, 'tbl_reference_age_parameter_main');
    }

}
