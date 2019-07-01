<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id', 'kuddennr', 'email', 'name', 'total', 'shipped', 'error', 'street', 'city', 'postindex', 'other_address', 'placed', 'info'];

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
        setlocale(LC_MONETARY, 'de_DE');
//        return money_format('€%i', $total);
        return '€' .  number_format($total,  2, ',', '.');
    }

    public function getDiscountAttribute()
    {
        $qty = $this->products->sum(function ($product){
            return $product->pivot->quantity;
        });
        if ($qty > 40) {
            $result = $this->total * 0.01;
            return $result;
            /*$result = $this->products->map(function ($item){
                return $item->price12 * $item->pivot->quantity * 0.01;
            });*/
        } else {
            return 0;
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
