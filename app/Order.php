<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'phone', 'email', 'name', 'total', 'shipped', 'error'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product')->withPivot(['quantity', 'type']);
    }

    public function presentTotal($total = false)
    {
        if (!$total) {
            $total = $this->total;
        }
        return money_format('€%i', $total);
    }

    public function getDiscountAttribute()
    {
        return $this->products->filter(function($value){
            return $value->pivot->quantity > 40;
        })->map(function ($item){
            return $item->price12 * $item->pivot->quantity * 0.01;
        })->sum();
    }

    public function getDeliveryDateAttribute()
    {
        return $this->created_at->addDays(5)->format('M d Y');
    }
}
