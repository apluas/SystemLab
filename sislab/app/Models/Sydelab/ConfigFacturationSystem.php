<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigFacturationSystem extends Model
{
    use HasFactory;

    protected $table = 'config_facturation_system';

    protected $fillable = [
        'tbl_sucursal',
        'name',
        'status',
    ];
}
