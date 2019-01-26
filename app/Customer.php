<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['full_name', 'mobile_number', 'address', 'street_address', 'apartment_number', 'city', 'geo_coordinates'];
}
