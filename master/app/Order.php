<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'province', 'city', 'address', 'kodepos', 'payment_method', 'subtotal', 'total_harga', 'shipped'];

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot('quantity', 'size', 'color');
    }
}
