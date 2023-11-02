<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportQR extends Model
{
    use HasFactory;

    protected $table = 'config_report_qr';

    protected $fillable = [
        'tbl_sucursal',
        'tbl_exams',
        'status',
    ];
}
