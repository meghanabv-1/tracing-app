<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name',
        'father_name',
        'mobile_no',
        'alt_no',
        'padd',
        'ladd',
        'status'
      ];
}
