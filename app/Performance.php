<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    protected $fillable = [
        'username',
        'collection',
        'month',
        'year'
      ];
}
