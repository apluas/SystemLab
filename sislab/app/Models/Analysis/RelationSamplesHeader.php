<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelationSamplesHeader extends Model
{
    use HasFactory;

    protected $table = 'exams_samples_main';

    // configuracion de muestras para los examenes, cabecera, id de la tabla 'exams'

    protected $fillable = [
        'tbl_exams',
        'status',
    ];

    public function getAll()
    {
        return $this->hasMany(RelationSamplesDetails::class, 'tbl_exams_samples_main');
    }

}
