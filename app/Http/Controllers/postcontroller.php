<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
     public function show(Request $request){
        //$data = $request->input();
        $data = $request->validate([
        	'name'=>'min:12',
        	'password'=>'min:10|max:12' 
        ]);
        // dd($data);
        print_r($data);
     }

    /*this is component view function*/

     public function service(){
     	return view('component-display.services');
     }
    

     public function contact(){
     	return view('component-display.contact1');
     }


  /*this is component view functions end here*/
}
