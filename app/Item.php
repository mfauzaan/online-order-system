<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    protected $attributes = [
        'rating' => 0,
    ];
    //
    protected $fillable = ['name', 'description', 'price', 'status', 'featured_image'];
}
