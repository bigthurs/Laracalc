<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculation extends Model
{
    protected $fillable = [
        'input_1',
        'input_2',
        'operator',
        'result'
    ];
}
