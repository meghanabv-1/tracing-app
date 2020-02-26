<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Backend extends Model
{
    protected $fillable = [
        'employee_id',
        'name',
        'name_m',
        'name_l',
        'father',
        'father_m',
        'father_l',
        'gender',
        'dob',
        'department',
        'house',
        'house_no',
        'area',
        'area_p',
        'town',
        'town_p',
        'district',
        'district_p',
        'landmark',
        'landmark_p',
        'pincode',
        'pincode_p',
        'state',
        'state_p',
        'location',
        'location_p',
        'mobile_no',
        'contact_person',
        'email',
        'mobile_nop',
        'pan_no',
        'confirmation',
        'account_no',
        'aadhar',
        'dra_no',
        'pvc',
        'designation',
        'doj',
        'resume',
        'status'
      ];
}
