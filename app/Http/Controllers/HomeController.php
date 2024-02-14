<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;
use App\Webhome;
use App\Comming;


class HomeController extends Controller
{

public function home(){


    $movies=Movies::get();

    $webhome=Webhome::get();

    $comming=Comming::get();


    
    return view('home',['requests'=>$movies,'webhomes'=>$webhome,'commings'=>$comming]);

}


}