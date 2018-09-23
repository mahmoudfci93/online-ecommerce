<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_Wishlist extends Model
{
protected $fillable = ['user_id','product_id'];

    public function user_wishlist(){

        return $this->belongsTo('App\User');
    }

    public function product_to_wishlist(){

        return $this->hasMany('App\Product');
    }

}
