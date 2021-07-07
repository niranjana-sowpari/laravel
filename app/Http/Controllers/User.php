<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    //
    function index($id){
    	//echo "hello".$id;
    	return view('test',array('id'=>$id));
    }
}
