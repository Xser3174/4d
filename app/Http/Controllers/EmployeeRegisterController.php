<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeRegisterController extends Controller
{
   public function index(){

    return view('employeeRegister');

   }

   public function post(Request $request){

   // 'idNum','ename','mail','pass','national','nrc','dob'

   
        // if($input=$request->filled('idNum')){
        //     return $input;
        // }else{
        //     return "not";
        // }
        // if($input=$request->only('mail','pass')){
        //         return $input;
        // }

            // $str="Please Fill\n";
            // if($_REQUEST['idNum']==null){
            //     $str.="id\n";

            // }
            //     if($_REQUEST['ename']==null){
            //         $str.="name\n";
            //     }
            //         if($_REQUEST['mail']==null){
            //             $str.="emai\nl";

            //         }                   
            //             if($_REQUEST['pass']==null){
            //                 $str.="pass\n";
            //             }
            //                 if($_REQUEST['national']==null){
            //                     $str.="national\n";
            //                 }
            //                     if($_REQUEST['nrc']==null){
            //                         $str.="nrc\n";
            //                     }
            //                         if($_REQUEST['dob']==null){
            //                             $str.="dob\n";
            //                         }
                            

            // return $str;

            $str="Please Fill\n:\n";
                $input=$request->all();//return $input;
                    foreach ($input as $k => $v) {
                        
                        if($v==null){
                            $str .= $k."\n";
                        }
                         
                    }
                    return $str;
  
    }
    }