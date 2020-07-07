<?php

namespace App\Http\Controllers;

use App\BuyBook;
use Illuminate\Http\Request;
use App\Book;
use App\Cart;
use Redirect;
use App\User;
use App\Auth;

class BuyBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $bookdata=Book::with('user')->get();
         
        return view('shop_grid',compact('bookdata'));
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
     * @param  \App\BuyBook  $buyBook
     * @return \Illuminate\Http\Response
     */
    public function show(BuyBook $buyBook)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuyBook  $buyBook
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyBook $buyBook)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuyBook  $buyBook
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyBook $buyBook)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuyBook  $buyBook
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyBook $buyBook)
    {
        //
    }

    public function addToBuy($id)
    {
        $cartid['id']=$id;
        $buydata=Cart::where($cartid)->get();
        
       // $cartdata['0']->sub_name;

        $buy_date = Carbon::now();
        $buy_date->toDateString(); 

        $request= new Cart();
       $request->user_id= auth()->user()->id;     
       $request->std=$buydata['0']->std; 
       $request->sub_name=$buydata['0']->sub_name;   
       $request->book_price=$buydata['0']->book_price;
       $request->book_image=$buydata['0']->book_image;     
       $request->buy_date=$buy_date;
      
        $request->save();

       
      return Redirect::to('/cartform');
    }


    public function getuserInfo($id)
    {
        
       $userdata=Book::with('user')->where('id',$id)->get();
        $selluser['sellername']=$userdata[0]->user->name;
        $selluser['mobile']=$userdata[0]->user->mobile;
        $selluser['bookname']=$userdata[0]->sub_name;
        
        $buyuser['name'] = auth()->user()->name;
        $buyuser['mobile'] = auth()->user()->mobile;
        //return $selluser;

        return view('massage',compact('selluser','buyuser'));

       
       // return Redirect::to('/')->with('success', true)->with('message','That was great!');
    }

}
