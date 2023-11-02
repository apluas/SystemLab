<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;
use OwenIt\Auditing\Auditable as AuditingAuditable;

class Services extends Model implements Auditable
{
    use AuditingAuditable;
    use HasFactory;

    protected $table = 'type_services';

    protected $fillable = [
        'code',
        'name',
        'reference_auxiliary',
        'status',
    ];

}
