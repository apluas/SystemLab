<?php

namespace App\Models\Sydelab;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterheadDistribution extends Model
{
    use HasFactory;

    protected $table = 'letterhead_distribution';

    protected $fillable = [
        'code',
        'name',
        'status',
    ];
}
