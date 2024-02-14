<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comming;
class CommingmovieController extends Controller
{

public function commingmovie(){

    
    return view('admin/comming/commingmovie');

}
public function commingsubmit(Request $request){

    
 
    $comming= new Comming;

    if ($request->file('comming_file')){
        $file=$request->file('comming_file');
        $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
        $destinationPath = 'cmming/' ;
        $file->move($destinationPath,$fileName);
        $comming->comming_file = $destinationPath.$fileName;

        
    };
    
    $comming->movie_name = $request->movie_name;
    $comming->movie_part = $request->movie_part;
    $comming->arrival_date = $request->arrival_date;


    $comming->push();
    
    return redirect()->action('AdminController@admin');
}

}