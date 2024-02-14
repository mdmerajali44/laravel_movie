<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;
use App\Webhome;
use App\Comming;


class MoviehomeController extends Controller
{

public function movie($id){

    $request=Movies::find($id);

   
    return view('movie',['requests'=>$request]);

   /* $movies=Movies::get();
    $webhome=Webhome::get();
    $comming=Comming::get();


    
    return view('movie',['requests'=>$movies,'webhomes'=>$webhome,'commings'=>$comming]);
    */

}


}