<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FirmsDoctors extends Model
{
    use HasFactory;

    protected $table = 'firms_doctors';

    protected $fillable = [
        'specialist',
        'unique_img',
        'size',
        'description',
        'url',
        'user_id',
        'status',
    ];
}
