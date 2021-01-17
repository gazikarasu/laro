<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DenemeController extends Controller
{
    public function getir(Request $sreq){
      
    
       $ad=$sreq->input('user_name');
       $pass=$sreq->input('pass');
       $mail=$sreq->input('mail');
       $tel=$sreq->input('number');
      
       DB::insert('insert into users (user_name, user_pass, user_mail, user_phone) values (?,?,?,?)',[$ad,$pass,$mail,$tel]);
       
    }
   

    public function giris(){
        return view('kayit');  
        
      }


 
}
