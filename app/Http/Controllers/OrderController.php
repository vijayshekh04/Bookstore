<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class OrderController extends Controller
{
    public function sent(Request $request)
    {
    	$data = array('name'=>"Virat Gandhi");
   
	      Mail::send(['text'=>'mail'], $data, function($message) {
	         $message->to('vijayshekh041@gmail.com', 'Prakash')->subject
	            ('Laravel Basic Testing Mail');
	         $message->from('vijayshekh041@gmail.com','Vijay Shekh');
	      });
	      echo "Basic Email Sent. Check your inbox.";
    }
}
