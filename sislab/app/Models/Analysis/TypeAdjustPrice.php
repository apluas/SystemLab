<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAdjustPrice extends Model
{
    use HasFactory;

    protected $table = 'type_adjust_price';

    protected $fillable = [
        'code',
        'name',
        'status',
    ];

}
