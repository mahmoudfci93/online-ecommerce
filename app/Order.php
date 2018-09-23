<?php

namespace App;

use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    protected $fillable = ['total','delivered'];

    public function orderItems(){

        return $this->belongsToMany('App\Product')->withPivot('qty','total');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public static function createOrder(){

        $user = Auth::user();
        $order = $user->orders()->create([
            'total'=>Cart::total(),
            'delivered'=>0
        ]);

        $cart_items = Cart::content();
        foreach ($cart_items as $cart_item){
            $order->orderItems()->attach($cart_item->id,[
                'qty'=>$cart_item->qty,
                'total'=>$cart_item->qty*$cart_item->price
            ]);
        }

    }

}
