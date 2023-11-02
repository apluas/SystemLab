<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationTemplatesDefinition extends Model
{
    use HasFactory;

    protected $table = 'exams_templates_main';

    // configuracion de las plantillas que contienen los examenes, 'tbl_exams' id del examen

    protected $fillable = [
        'tbl_exams',
        'tbl_category_exams',
        'name_template',
        'method_template',
        'reference_template',
        'print_parameters',
        'print_method_template',
        'print_reference_template',
        'status',
    ];

}
