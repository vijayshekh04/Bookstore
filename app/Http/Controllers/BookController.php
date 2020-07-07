<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use App\User;
use App\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use vanue;
use Redirect;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
       $id = auth()->user()->id;
       $userdata=User::where('id',$id)->first();
       
        return view('sell_book',compact('userdata'));
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
        /*request()->validate([
            'sub_name' => 'required',
       ]);*/ 

       

       $rules= [
        'sub_name'=>'required',
        'std'=>'required',
        'book_price'=>'required',
        'book_photo' => 'mimes:jpeg,jpg|required|max:1000'        
    ];


    $customMessages = [
        'sub_name.required' => ' Book Name is required.',
        'std.required'=>' STD is required',
        'book_price.required'=>' Book Price is required',
        'book_photo.required'=>'Book Image is required',
    ];

    $this->validate($request, $rules, $customMessages);

    

        $sell_date = Carbon::now();
        $sell_date->toDateString();    ;


        $file =$request->file('book_photo');
        //Move Uploaded File
        $fnm = rand()."_".$file->getClientOriginalName();
        $destinationPath = 'uploads/bookimage';
        if($request->has('book_photo'))
        {
            $file->move($destinationPath,$fnm);
            $request->merge(["book_image"=>$destinationPath.'/'.$fnm,"sell_date"=>$sell_date]);
        }
        $book = Book::create($request->all());
        /*if($book)
        {
            return redirect()->route('member.index');
        }*/






/*
        $path = $request->file('book_image')->store('public');
        $sell_book_data= new Book();
        $sell_book_data->user_id=$request->user_id;
        $sell_book_data->sub_name=$request->sub_name;
        $sell_book_data->std=$request->std;
        $sell_book_data->book_price=$request->book_price;
        $sell_book_data->sell_date=$sell_date;
        $sell_book_data->book_image=$path;
        $sell_book_data->save();*/

        return Redirect::to('/sell_book')->with('success', true)->with('message','That was great!');

    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

           
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $bookinfo=Book::where('id',$id)->get();
           return view('edit_sell_book',compact('bookinfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
              
            //return $request;

               $rules= [
                'sub_name'=>'required',
                'std'=>'required',
                'book_price'=>'required',
                      
            ];


            $customMessages = [
                'sub_name.required' => ' Book Name is required.',
                'std.required'=>' STD is required',
                'book_price.required'=>' Book Price is required',
                
            ];

            $this->validate($request, $rules, $customMessages);
            
            $sell_date = Carbon::now();
            $sell_date->toDateString();  

           
        
        $book = Book::where('id',$id)->update(["sub_name" => $request->sub_name,"std"=>$request->std,"book_price"=>$request->book_price]);
        

        return Redirect::to('/')->with('success', true)->with('message','That was great!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        echo 'destroy';
    }


    public function display()
    {
        $id = auth()->user()->id;
       $bookdata=Book::where('user_id',$id)->get();
   
        return view('list_sell_book',compact('bookdata'));
    }

    
}
