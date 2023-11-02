<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationTemplatesParameters extends Model
{
    use HasFactory;

    protected $table = 'exams_templates_parameters';

    // ->configuración de plantillas de un examen, 'exams_templates_main' id, cabecera
    // ->indica que tipo de parametro se va configurar en la plantilla, 'type_parameter_template'
    // ->indica donde se mostrara la interpretacion, 'config_interpretation_templates'
    // ->indica genero como parametro del paciente, 'genders'
    // ->lista de opciones cabecera, 'result_input_option_main' id cabecera //Input Option
    // ->se registra las opciones de la lista que tiene para selecionar resultados, 'result_input_option_details' //Input Option

    protected $fillable = [
        'tbl_exams_templates_main',         //INTEGER
        'tbl_type_parameter_template',      //INTEGER
        'tbl_result_input_option_main',      //INTEGER
        'tbl_config_interpretation_templates',     //INTEGER
        'tbl_result_input_option_details',     //INTEGER
        'order',                            //INTEGER
        'name',                             //STRING
        'abbreviation',                     //STRING
        'tbl_genders',                       //INTEGER -> tabla genders
        'unity',                            //STRING
        'value_defect',                     //STRING
        'value_normal',                     //STRING
        'value_min',                        //STRING
        'value_max',                        //STRING
        'value_min_critical',               //STRING
        'value_max_critical',               //STRING
        'references_critical',              //STRING se podra guardar algun texto referencial
        'qr_url',                           //STRING
        'image_url',                        //STRING
        'image_name',                       //STRING
        'html',                             //STRING
        'interpretation',                   //STRING
        'show_value_references',            //STRING -> DEFAULT ACTIVO
        'show_pdf',                         //STRING -> DEFAULT ACTIVO mostrar o ocultar imagen o grafico
        'show_interpretation',              //STRING -> DEFAULT INACTIVO
        'status',                           //STRING -> DEFAULT ACTIVO
    ];

}
