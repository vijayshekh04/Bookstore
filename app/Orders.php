<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable = [
        'user_id','cart_id','order_date',
    ];

    public function cart()
    {
    	return $this->belongsTo(Cart::class);
    }
}
