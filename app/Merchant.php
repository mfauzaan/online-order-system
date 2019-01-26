<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    //

    protected $fillable = ['name', 'mobile_number', 'address', 'street_address', 'apartment_number', 'city', 'geo_coordinates'];

    /* Relationships */
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function items() {
        return $this->hasMany('App\Item');
    }
}
