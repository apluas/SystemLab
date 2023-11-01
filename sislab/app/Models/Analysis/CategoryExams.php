<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryExams extends Model
{
    use HasFactory;

    protected $table = 'category_exams';

    //aqui se registrara la seccion o categoria en la que pertenece el examen o analisis

    protected $fillable = [
        'order',
        'name',
        'status',
    ];

}
