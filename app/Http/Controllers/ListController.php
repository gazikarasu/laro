<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Users;

class ListController extends Controller
{
    public function listele()
    {
   $data = Users::all();
        return view('list',['data'=>$data]);
    }



}

