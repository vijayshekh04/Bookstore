<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

Route::get('/', 'HomeController@index');


/*Route::get('/', function () {
    return view('welcome');
});*/
// Route::get('/', function () {
//     return view('index');
// });
Route::get('massage', function () {
    return view('massage');
});





Route::get('about', function () {
    return view('about');
});

Route::get('dnd', function () {
    return view('dnd');
});




Route::get('contact', function () {
            return view('contact');
});

Route::get('single_product', function () {
            return view('single_product');
    });
/*Route::get('sell_book', function () {
            return view('sell_book');
});*/

Route::group(["middleware"=>"auth"], function(){
    
    Route::resource('sell_book','BookController');
    Route::get('cart/{id}', 'CartController@addToCart');
    Route::get('buy/{id}', 'BuyBookController@addToBuy');
    Route::get('setOrder', 'OrderController@sent');

    Route::resource('shop_grid','BuyBookController');

    Route::get('cartform', 'CartController@index');
    Route::get('cartform/{id}', 'CartController@destroy');

    Route::get('selluser/{id}', 'BuyBookController@getuserInfo');

    Route::resource('sell_book','BookController');

    Route::get('list_sell_book', 'BookController@display');

    Route::get('setOrder/{id}','OrdersController@getOrder');
    Route::resource('order','OrdersController');



 });

    

/*Route::get('cart/{id}', function () {
            return view('cart');
});*/



/*Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});*/



