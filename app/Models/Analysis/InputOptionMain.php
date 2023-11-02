<?php

namespace App\Models\Analysis;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Analysis\InputOptionDetails;

class InputOptionMain extends Model
{
    use HasFactory;

    protected $table = 'result_input_option_main';

    protected $fillable = [
        'name',
        'status',
    ];

    public function getAll()
    {
        return $this->hasMany(InputOptionDetails::class, 'tbl_result_input_option_main');
    }

}
