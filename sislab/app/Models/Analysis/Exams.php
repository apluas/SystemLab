<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    use HasFactory;
    protected $table = 'exams';

    // CONVENIOS RELACIONES
    // ->configuración muestras del examen, para toda la empresa 'exams_samples_main' *registrar una o varias muestras, caso contrario se guardara null, no existiran muestras para ese analisis
    // ->configuración de plantillas del examen, para toda la empresa 'exams_template_main' *registrar una plantilla, caso contrario se guardara null, no existiran muestras para ese analisis
    // ->configuración de plantillas del examen, para toda la empresa 'category_exams' *registrar la categoria donde pertenece el examen
    // PRECIOS EXAMENES PARA CONVENIOS -> exams_prices_convenants
    // PRECIOS REMISION DE EXAMENES PARA CONVENIOS -> exams_prices_convenants

    protected $fillable = [
        'tbl_exams_samples_main',
        'tbl_exams_template_main',
        'tbl_type_exam',
        'code',
        'name',
        'name_report',
        'order',
        'hour_process',
        'minute_process',
        'tag_print',
        'references',
        'confidential_result',
        'price_public',
        'tbl_type_adjust_price_others',
        'price_others',
        'tbl_type_adjust_price_medics',
        'price_medics',
        'tbl_type_adjust_price_remission',
        'price_remission',
        'status',
    ];

}
