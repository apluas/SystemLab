<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigFirms extends Model
{
    use HasFactory;

    protected $table = 'config_report_firms';

    protected $fillable = [
        'id_sucursal',
        'name',
        'config',
        'id_firms_1',
        'id_firms_2',
        'id_firms_3',
        'id_firms_4',
        'created_by_user',
        'status',
    ];
}
