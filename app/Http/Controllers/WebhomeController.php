<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Webhome;
class WebhomeController extends Controller
{

public function webhome(){

    
    return view('admin/home/webhome');

}
public function webhomesubmit(Request $request){

    
 
    $webhome= new Webhome;

    if ($request->file('web_file')){
        $file=$request->file('web_file');
        $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
        $destinationPath = 'webupload/' ;
        $file->move($destinationPath,$fileName);
        $webhome->web_file = $destinationPath.$fileName;

        
    };
    
    $webhome->movie_name = $request->movie_name;
    $webhome->movie_part = $request->movie_part;
    $webhome->arrival_date = $request->arrival_date;


    $webhome->push();
    
    return redirect()->action('AdminController@admin');
}

}