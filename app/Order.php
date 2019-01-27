<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['status', 'merchant_id', 'customer_id', 'item_id', 'total_price','balance', 'delivery_type', 'payment_type'];


    // Relationships
    public function item() {
        return $this->belongsTo('App\Item');
    }

    public function customer() {
        return $this->belongsTo('App\Customer');
    }
}
