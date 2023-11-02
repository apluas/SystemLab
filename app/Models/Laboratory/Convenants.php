<?php

namespace App\Models\Laboratory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convenants extends Model
{
    use HasFactory;

    protected $table = 'convenants';

    // CONVENIOS RELACIONES
    // ->configuración de encabezados y pie de reportes resultados, por convenio(encabezado, logos, etc) 'letterhead' *registrar una configuracion opcional, caso contrario cargara la configuracion por defecto del laboratorio
    // ->configuración de firmas por sucursal(firma de laboratoristas, dueño del laboratorio) 'config_report_firms' *elegir una configuracion opcional, caso contrario cargara la configuracion por defecto del laboratorio
    // ->configuraciones del comportamiento del sistema de convenio (cotizaciones, crear remisiones de muestras, resultados, crear usuarios) 'config_portal_convenants' *opcional o cargara por defecto la configuracion estandar
    // ->configuraciones del formato reporte de campos especiales (edad,medico,servicio, etc) 'config_report_convenants' *opcional o cargara por defecto la configuracion estandar
    // ->configuraciones de los analisis/examenes disponibles para este convenio con respectivos precios,descuentos 'config_analysis_convenants' *opcional o cargara por defecto ninguno
    // ->configuraciones de envio de reportes por medio de email notificaciones al convenio 'convenants_email_notification' *debe registrar al menos uno o tomar email sistema

    protected $fillable = [
        'tbl_letterhead',
        'tbl_config_report_firms',
        'tbl_config_portal_convenants',
        'tbl_config_report_convenants',
        'name',
        'business_name',
        'code',
        'ruc',
        'address',
        'ubication',
        'status_system',
        'email_system',
        'color_primary',
        'color_secundary',
        'status',
        'created_by_user',
    ];

}
