<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationSamplesDetails extends Model
{
    use HasFactory;

    protected $table = 'exams_samples_details';

    // ->configuración de muestras de un examen, 'exams_samples_main' id, cabecera
    // ->configuración de muestras de un examen, 'samples' id de la muestra

    protected $fillable = [
        'tbl_exams_samples_main',
        'tbl_samples',
        'status',
    ];

}
