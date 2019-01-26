<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /* Relationships */
    public function user() {
        return $this->belongsTo('App\User');
    }

    protected $fillable = ['full_name', 'mobile_number', 'address', 'street_address', 'apartment_number', 'city', 'geo_coordinates'];
}
