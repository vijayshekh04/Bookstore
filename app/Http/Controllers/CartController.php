<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use App\Book;
use Carbon\Carbon;
use Redirect;
use App\User;
use App\Auth;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = auth()->user()->id;
        $cartdata=Cart::where('user_id',$id)->get();

      //return $bookdata=Book::with('user')->get();
        return view('cart',compact('cartdata'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id);
        $cart->delete();

        return Redirect::to('/cartform')->with('danger', true)->with('message','delete successfully!');
        
    }

    public function addToCart($id)
    {
        $sellid['id']=$id;
        $cartdata=Book::where($sellid)->get();
        
       // $cartdata['0']->sub_name;

        $cart_date = Carbon::now();
        $cart_date->toDateString(); 

        $request= new Cart();
       $request->user_id= auth()->user()->id;
       $request->sellid=$cartdata['0']->id;      
       $request->std=$cartdata['0']->std; 
       $request->sub_name=$cartdata['0']->sub_name;   
       $request->book_price=$cartdata['0']->book_price;
       $request->book_image=$cartdata['0']->book_image;     
       $request->cart_date=$cart_date;
      
        $request->save();

       
      return Redirect::to('/cartform');
    }
}
