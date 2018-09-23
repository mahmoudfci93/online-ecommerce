<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $products = Product::all()->take(3);
        return view('front.home',compact('products'));
    }

    public function watch($id){

        //specific product
        $product = Product::findOrFail($id);
        //related products
        $related_products = $product->category->products()->where('id','!=',$product->id)->get();


      //  $related_products = Product::where('category_id',$category_id)->get();
        return view('front.watch',compact('product','related_products'));

    }

    public function show_all_products(){

        $products = Product::all();
        return view('front.all_products',compact('products'));
    }





}
