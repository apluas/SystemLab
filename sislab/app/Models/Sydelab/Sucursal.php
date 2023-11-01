<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    protected $table = 'sucursal';

    // SUCURSAL RELACIONES
    // ->configuración de facturacion por sucursal(una sucursal puede registrar varios puntos de emision) 'config_invoice_sucursal' *registrar uno o mas
    // ->configuración del sistema facturacion por sucursal(una sucursal puede facturar con sydelab o otro sistema) 'config_facturation_system' *registrar o elegir un sistema
    // ->configuración de encabezados y pie de reportes resultados, por sucursal(encabezado, logos, etc) 'letterhead' *registrar una configuracion
    // ->configuración de firmas por sucursal(firma de laboratoristas, dueño del laboratorio) 'config_report_firms' *elegir una configuracion
    // ->configuración de examenes con QR(examenes que si mostraran QR) 'config_report_qr' *registrar uno, varios o ninguno

    protected $fillable = [
        'tbl_letterhead',
        'tbl_config_report_firms',
        'name',
        'ruc',
        'email',
        'phone',
        'address',
        'firm_doctor_certificate',
        'status',
        'matriz',
        'image',
    ];
}
