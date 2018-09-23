<?php

namespace App\Http\Controllers;

use App\Category;
use App\Image;
use App\Product;
use Illuminate\Cache\RetrievesMultipleKeys;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $images = Image::all();
        return view('admin.product.index',compact('products','images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::pluck('name','id');

        return view('admin.product.create',compact('categories'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request,[

           'name'=>'required|min:3',
            'price'=>'required',
            'quantity'=>'required',
            'size'=>'required',
            'description'=>'required',
            'overview'=>'required',
            'category_id'=>'required',
            'available'=>'required',
            'images'=>'required'
        ]);



        $formInput = $request->except('images');
        Product::create($formInput);
        $productId = Product ::orderBy('id', 'desc')->first()->id;
        $files = Input::file('images');
        $file_count = count($files);
        $uploadcount = 0;
        foreach ($files as $file){
                $destinationPath = 'uploads';
                $filename = $file->getClientOriginalName();
                $unique_name = md5($filename. time());
                $upload_success = $file->move($destinationPath, $unique_name);
                $uploadcount ++;

                // save into database
                $image = new Image();
                $product = new Product();
                $image->name = $unique_name;
                $image->product_id=$productId;
                $image->save();
            }
        return redirect()->route('admin.index');

        }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id)->first();

        return view('admin.product.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::findOrFail($id)->get();
        return view('admin.product.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validation
        $this->validate($request,[

            'name'=>'required|min:3',
            'price'=>'required',
            'quantity'=>'required',
            'size'=>'required',
            'description'=>'required',
            'overview'=>'required',
            'category_id'=>'required',
            'available'=>'required',
        ]);



              $product = Product::findOrFail($id);
              $product->update($request->all());
//            $product->name=$request->name;
//            $product->description=$request->description;
//            $product->overview=$request->overview;
//            $product->size=$request->size;
//            $product->price=$request->price;
//            $product->price_before=$request->price_before;
//            $product->quantity=$request->quantity;
//            $product->available=$request->available;
//            $product->category_id=$request->categories;
//            $product->save();

            return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product = Product::find($id);
       $product->image()->delete();
       $product->delete();

        return back();
    }

    public function show_products($id)
    {
        $product = Product::where('id',$id)->first();

        return view('admin.product.show',compact('product'));
    }

    public function edit_products($id)
    {
        $products = Product::where('id',$id)->first();
        $categories= Category::pluck('name','id');
        $category = $products->category->name;
        return view('admin.product.edit',compact('products','categories','category'));
    }


}
