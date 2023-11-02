<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditingAuditable;

class Atention extends Model implements Auditable
{
    use AuditingAuditable;
    use HasFactory;

    protected $table = 'atention';

    protected $fillable = [
        'code',
        'name',
        'reference_auxiliary',
        'color',
        'priority',
    ];

}
