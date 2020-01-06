<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loaninfo extends Model
{
    protected $fillable = [
         'bankname',
        'loan_application_no',
        'cust_name',
        'teamlead',
        'month',
        'pos',
        'status',
        'mobile'
      ];
      
}
