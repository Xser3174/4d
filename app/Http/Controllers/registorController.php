<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use Illuminate\Http\Request;

class registorController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(Request $request){
        
        // $url=$request->method();
        // return $url;
        // if($request->isMethod('Post')){
        //     return true;
        // }else{
        //         echo "edd";
        //     }

    return view('registor');
            //urlbar 
        // $name=$request->query('pass');
        // return $name;

            //Der
        

    }
    public function post(Request $request){
        // $input=$request->all();

        // $mail=$request->input('mail');
        // $pass=$request->input('pass');

        // return "Email".$mail."\n"."Pass".$pass;


        //Determining If An Input Value Is Present =>use has()
        // if($request->has('mail')){
        //     return "email exist";
        // }


        //The hasAny method returns true if any of the specified values are present
        // if ($request->has(['name', 'email'])) {
        //     echo "ok";
        // }else{
        //     echo "not";
        // }


        // has Any Not Array
        // if ($request->hasAny(['name', 'mail')) {
        //     echo "ok";
        // }else{
        //     echo "not";
        // }
        

        // value test
        // if ($request->filled('mail')) {
        //     echo "Yes";
        // }else{
        //     echo "No";
        // }


        //Retrieving A Portion of

        // if($input=$request->only('mail','pass')){
        //     return $input;
        // }
        // if($input=$request->except(['mail','pass'])){
        //  return $input;
        // }

        
        
        if ($request->missing('name')) {
            return "Yes";
        }else{
            return "No";
        }

        
}
}
