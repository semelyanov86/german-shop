<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function getCurprice($key)
    {
        return $this->$key;
    }

    public function presentPrice($type)
    {
        return money_format('€%i', $this->$type);
    }
}
