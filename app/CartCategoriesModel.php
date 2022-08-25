<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartCategoriesModel extends Model
{
    protected $table = 'carts_categories';

    protected $fillable = ['title', 'subtitle', 'content', 'display', 'level'];

    public function getCart()
    {
        return $this->hasMany('App\CartModel', 'categories_id', 'id');
    }


}
