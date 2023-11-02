<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Samples extends Model
{
    use HasFactory;

    protected $table = 'samples';

    protected $fillable = [
        'code',
        'name',
        'color',
        'references',
        'align_code_bar',
        'print_code_bar',
        'print_sucursal_bar',
        'print_tag_exam',
        'status',
    ];

}
