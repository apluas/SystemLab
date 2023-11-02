<?php

namespace App\Models\Laboratory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortalConvenants extends Model
{
    use HasFactory;

    protected $table = 'config_portal_convenants';

    // ->configuraciones del comportamiento del sistema de convenio (cotizaciones, crear remisiones de muestras, resultados, crear usuarios) 'config_portal_convenants' *opcional o cargara por defecto la configuracion estandar

    protected $fillable = [
        'tbl_convenants',
        'quotes',
        'create_remission_samples ',
        'results',
        'user_management',
        'status',
    ];

}
