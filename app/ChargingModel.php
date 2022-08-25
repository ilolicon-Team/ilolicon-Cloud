<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChargingModel extends Model
{
    use SoftDeletes;

    protected $table = 'charging';

    protected $fillable = ['time', 'unit', 'money', 'cart_id', 'content'];

    public function getCart()
    {
        return $this->hasOne('App\CartModel', 'id', 'cart_id');
    }

    public function getUnitAttribute($value)
    {
        if (config('app.locale') == "zh-CN") {
            switch ($value) {
                case "day":
                    return "天";
                    break;
                case "month":
                    return "月";
                    break;
                case  "year":
                    return "年";
                    break;
            }
        }
      return $value;
    }

}
