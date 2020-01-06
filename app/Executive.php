<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Executive extends Model
{
    protected $fillable = ['executivename',
    'loan_application_no',
    'initiative',
    'settlement',
    'installment',
    'date'
];
}
