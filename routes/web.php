<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','FrontController@index');
Route::get('/watch/{id}','FrontController@watch')->name('watch');
Route::get('/all-watches','FrontController@show_all_products')->name('all_watches');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/logout','Auth\LoginController@logout');
Route::resource('/cart','CartController');
Route::get('/cart/add-items/{id}','CartController@addItem')->name('cart.addItems');

//User Authenticated Routes
route::group(['middleware'=>'auth'],function () {

     route::get('/wishlist/{id}','WishlistController@check_wishlist')->name('check.wishlist');
     route::post('/wishlist/store','WishlistController@save_wishlist')->name('store.wishlist');

    Route::get('/shipping-info','CheckoutController@shipping')->name('checkout.shipping');
    Route::resource('/address','AddressController');
    Route::get('/payment','CheckoutController@payment')->name('checkout.payment');
    Route::post('/store-payment','CheckoutController@storePayment')->name('payment.store');


});



// Admin Routes
 Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function (){

    Route::get('/',function (){
        return view('admin.index');
    })->name('admin.index');

    Route::resource('/product','ProductsController');
    Route::post('/product/show/{id}','ProductsController@show_products')->name('view.product');
    Route::post('/product/edit/{id}','ProductsController@edit_products')->name('edit.product');

    Route::resource('/category','CategoriesController');

    Route::get('orders/{type?}','OrderController@orders');
    Route::post('toggledeliver/{orderId}','OrderController@toggledeliver')->name('toggle.deliver');



});