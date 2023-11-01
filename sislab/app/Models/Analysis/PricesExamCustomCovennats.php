<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class PricesExamCustomCovennats extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;
    use HasFactory;
    protected $table = 'exams_prices_convenants';

    // CONVENIOS RELACIONES
    // ->tbl_exams, id de la tabla 'exams'
    // ->tbl_convenants, id de la tabla 'convenants'
    // ->tbl_type_adjust_price_others, id de la tabla de ajustes de precio

    protected $fillable = [
        'tbl_exams',
        'tbl_convenants',
        'tbl_type_adjust_price_others',
        'price_base_public',
        'price',
        'status',
    ];



}
