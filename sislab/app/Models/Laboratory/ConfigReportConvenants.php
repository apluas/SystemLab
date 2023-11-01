<?php

namespace App\Models\Laboratory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigReportConvenants extends Model
{
    use HasFactory;

    protected $table = 'config_report_convenants';

    // ->configuraciones del formato reporte de campos especiales (edad,medico,servicio, etc) 'config_report_convenants' *opcional o cargara por defecto la configuracion estandar

    protected $fillable = [
        'tbl_convenants',
        'age',
        'date_sample',
        'genders',
        'medic',
        'services',
        'sucursal',
        'sala',
        'cama',
        'type_patient',
        'references',
        'references_exam',
        'type_atention',
    ];

}
