<?php

namespace App\Models\Ubication;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ubication extends Model
{
    use HasFactory;

    protected $table = 'ubication';

    protected $fillable = [
        'code_provincia',
        'code_canton',
        'code_parroquia',
        'name_provincia',
        'name_canton',
        'name_parroquia',
        'status',
    ];
    
}
