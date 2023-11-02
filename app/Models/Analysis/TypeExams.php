<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeExams extends Model
{
    use HasFactory;

    protected $table = 'type_exam';

    //solo puede ser procesable o derivable

    protected $fillable = [
        'code',
        'name',
        'status',
    ];

}
