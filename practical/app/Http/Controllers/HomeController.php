<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    
    public function profile(){

        return view('profile');


    }

    public function toformat(){

        $res=Home::Format();

        dd('El nuevo formato Y-m-s: '.$res);

    }


}
