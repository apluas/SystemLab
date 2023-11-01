<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceSucursal extends Model
{
    use HasFactory;

    protected $table = 'config_invoice_sucursal';

    protected $fillable = [
        'tbl_sucursal',
        'tbl_config_facturation_system',
        'code_establishment',
        'code_emission_point',
        'code_sequential',
    ];
}
