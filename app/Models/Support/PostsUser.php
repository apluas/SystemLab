<?php

namespace App\Models\Support;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class PostsUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tbl_users_id', 'post', 'node_comment', 'likes'
    ];

}
