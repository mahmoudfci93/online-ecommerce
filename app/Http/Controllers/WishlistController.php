<?php

namespace App\Http\Controllers;

use App\User_Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class WishlistController extends Controller
{
    public function check_wishlist($id){

        if(Auth::user()->wishlist){

            User_Wishlist::create([
                'user_id'=>Auth::user()->id,
                'product_id'=>$id
            ]);
            return back();

        }
        else{

            return view('front.wishlist',compact('id'));
        }
    }

    public function save_wishlist(Request $request){
        // validation
        $this->validate($request,[
            'name'=>'required|max:12|min:3'
        ]);

        $user = Auth::user();
        $user->wishlist = $request->name;
        $user->save();
        return redirect('/home');

    }




}
