<?php

namespace App\Models\Support;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class LikePosts extends Authenticatable
{
    use Notifiable;

    protected $table = 'posts_like';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'tbl_users_id', 'tbl_posts_id'
    ];

}
