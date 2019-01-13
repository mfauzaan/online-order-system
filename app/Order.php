<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // Relationships
    public function order() {
        return $this->hasOne('App\Item', 'id', 'order_id');
    }
}
