<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $attributes = [
        'rating' => 0,
        'featured_image' => '',
    ];
    //
    protected $fillable = ['name', 'description', 'price', 'status', 'featured_image'];
}
