<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Home extends Model
{
    use HasFactory;


    public function scopeFormat()
    {
        $date1= '2021-03-17 02:31:01';
        //dd($date1);
        $res= date("Y-m-s", strtotime($date1));
        
        return $res;
        //echo($res);
    }
      

}
