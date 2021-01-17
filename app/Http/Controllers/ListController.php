<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function listele()
{
    $users = DB::select('select * from users');

    foreach ($users as $user) {

        return view('list',['users'=>$users]);
        
    }
    
}
}
