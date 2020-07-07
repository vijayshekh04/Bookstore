<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
   

   protected $fillable = [
        'user_id','std','sub_name','book_price','cart_date', 'book_image',
    ];

    public function user()
    {
    	return $this->belongsTo(Book::class);
    }

    public function order()
    {
        return $this->hasMany(Orders::class);
    }
}
