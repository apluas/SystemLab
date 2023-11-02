<?php

namespace App\Models\Support;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class TasksUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tbl_users_id', 'task', 'status'
    ];

}
