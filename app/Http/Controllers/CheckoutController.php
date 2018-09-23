<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{

    public function shipping(){

        return view('front.shipping-info');
    }

    public function payment(){

        return view('front.payment');
    }

    public function storePayment(Request $request){

     Order::createOrder();
     return redirect('/');
    }


}
