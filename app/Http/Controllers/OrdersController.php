<?php

namespace App\Http\Controllers;

use App\Orders;
use Illuminate\Http\Request;
use App\Book;
use App\Cart;
use Carbon\Carbon;
use Redirect;
use App\User;
use App\Auth;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        $userid = auth()->user()->id;
        $orderdata=Orders::with('cart')->where('user_id',$userid)->get();
         //return $orderdata;
        $id=$orderdata[0]->cart['sellid'];
        ///return $id;
        $userdata=Book::with('user')->where('id',$id)->get();
        //return $userdata;
        $selluser['sellername']=$userdata[0]->user->name;
        $selluser['mobile']=$userdata[0]->user->mobile;
        $selluser['bookname']=$userdata[0]->sub_name;
        
        $buyuser['name'] = auth()->user()->name;
        $buyuser['mobile'] = auth()->user()->mobile;
         return view('order',compact('orderdata','selluser','buyuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orders $orders)
    {
        //
    }

    public function getuserInfo($id)
    {
       $userdata=Book::with('user')->where('id',$id)->get();
        $selluser['sellername']=$userdata[0]->user->name;
        $selluser['mobile']=$userdata[0]->user->mobile;
        $selluser['bookname']=$userdata[0]->sub_name;
        
        $buyuser['name'] = auth()->user()->name;
        $buyuser['mobile'] = auth()->user()->mobile;

        $cartData=Cart::where("id",$id)->get();
        $sell_date = Carbon::now();
        $sell_date->toDateString(); 

        $orderdata["cart_id"]=$cartData[0]->id;
        $orderdata["user_id"]=$cartData[0]->user_id;
        $orderdata["order_date"]=$sell_date;

        $succ=Orders::create($orderdata);


       

        return view('massage',compact('selluser','buyuser'));

       
       // return Redirect::to('/')->with('success', true)->with('message','That was great!');
    }

    public function getOrder($id)
    {
        $cartData=Cart::where("id",$id)->get();

        //return $cartData[0]->sellid;
        
        $sell_date = Carbon::now();

        $sell_date->toDateString(); 

        $orderdata["cart_id"]=$cartData[0]->id;
        $orderdata["user_id"]=$cartData[0]->user_id;
        $orderdata["order_date"]=$sell_date;

        $succ=Orders::create($orderdata);
        
        return Redirect::to('/order')->with('success', true)->with('message','That was great!');
    }
}
