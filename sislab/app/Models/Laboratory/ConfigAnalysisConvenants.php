<?php

namespace App\Models\Laboratory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigAnalysisConvenants extends Model
{
    use HasFactory;

    protected $table = 'config_analysis_convenants';

    // ->configuraciones de los analisis/examenes disponibles para este convenio con respectivos precios,descuentos 'config_analysis_convenants' *opcional o cargara por defecto ninguno

    protected $fillable = [
        'tbl_convenants',
        'tbl_analysis',
        'discount_fixed',
        'discount_percentage',
        'price',
        'status',
    ];

}
