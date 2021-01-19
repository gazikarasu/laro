<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;



class RegController extends Controller
{
    public function getir(Request $sreq){


        $ad=$sreq->input('user_name');
        $pass=$sreq->input('pass');
        $mail=$sreq->input('mail');
        $tel=$sreq->input('number');


        $flight = new users;

        $flight->user_name = $ad;
        $flight->user_pass=$pass;
        $flight->user_mail=$mail;
        $flight->user_phone=$tel;

            $flight->save();
    }

    public function giris(){
        return view('kayit');

    }
}
