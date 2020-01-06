<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = [
        'emailto',
        'subject',
        'message',
        'attachment',
      ];
}
