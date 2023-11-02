<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InputOptionDetails extends Model
{
    use HasFactory;

    protected $table = 'result_input_option_details';

    // configurar opciones del input option -> tabla 'result_input_option_main'

    protected $fillable = [
        'tbl_result_input_option_main',
        'name',
        'status',
    ];

}
