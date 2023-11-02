<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letterhead extends Model
{
    use HasFactory;

    protected $table = 'letterhead';

    protected $fillable = [
        'tbl_letterhead_distribution',
        'tbl_sucursal',
        'name',
        'report_logo',
        'report_content',
        'margen_encabezado',
        'margen_pie',
        'margin_izquierdo',
        'margin_derecho',
        'created_by_user',
        'status',
    ];
}
