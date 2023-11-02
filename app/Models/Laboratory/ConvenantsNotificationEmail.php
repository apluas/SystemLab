<?php

namespace App\Models\Laboratory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConvenantsNotificationEmail extends Model
{
    use HasFactory;

    protected $table = 'convenants_email_notification';

    // ->configuraciones de envio de reportes por medio de email notificaciones al convenio 'convenants_email_notification' *debe registrar al menos uno o tomar email sistema

    protected $fillable = [
        'tbl_convenants',
        'email',
        'status',
    ];

}
