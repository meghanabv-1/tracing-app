<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Overall extends Model
{
    protected $fillable = [
    'teamleadname',
    'bankname',
    'tracername',
    'executivename',
    'collection',
    'date'
];
}
