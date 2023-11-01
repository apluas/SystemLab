<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PricesExamCustomMedics extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    protected $table = 'exams_prices_medics';

    // MEDICOS RELACIONES
    // ->tbl_exams, id de la tabla 'exams'
    // ->tbl_medics, id de la tabla 'medics'
    // ->tbl_type_adjust_price_medics, id de la tabla de ajustes de precio

    protected $fillable = [
        'tbl_exams',
        'tbl_medics',
        'tbl_type_adjust_price_medics',
        'price_base_public',
        'price',
        'status',
    ];



}
