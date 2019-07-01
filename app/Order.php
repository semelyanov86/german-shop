<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'kuddennr', 'email', 'name', 'total', 'shipped', 'error', 'street', 'city', 'postindex', 'other_address', 'placed'];

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
        if ($total === 0) {
            return '€' . '0.00';
        }
        if (!$total) {
            $total = $this->total;
        }
        return money_format('€%i', $total);
    }

    public function getDiscountAttribute()
    {
        $result = $this->products->filter(function($value){
            return $value->pivot->quantity > 40;
        })->map(function ($item){
            return $item->price12 * $item->pivot->quantity * 0.01;
        });
        if ($result->count() < 1) {
            return 0;
        } else {
            return $result->sum();
        }
    }

    public function getTaxAttribute()
    {
        return ($this->total - $this->discount) * 0.19;
    }

    public function getFinalTotalAttribute()
    {
        return $this->total - $this->discount + $this->tax;
    }

    public function getDeliveryDateAttribute()
    {
        return $this->created_at->addDays(5)->format('d M Y');
    }
}
