<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Relationships
    public function item() {
        return $this->belongsTo('App\Item');
    }

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
