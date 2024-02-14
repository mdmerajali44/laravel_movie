<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movies;
class UploatController extends Controller
{

public function uploat(){

    return view('admin/uploat/uploat');

}
public function submit(Request $request){

 
    $movies= new Movies;

    if ($request->file('move_file')){
        $file=$request->file('move_file');
        $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
        $destinationPath = 'upload/' ;
        $file->move($destinationPath,$fileName);
        $movies->move_file = $destinationPath.$fileName;
    }

    if ($request->file('move_img')){
        $file=$request->file('move_img');
        $fileName = md5(uniqid(rand(), true)).'.'.strtolower(pathinfo($file->getClientOriginalName(),PATHINFO_EXTENSION)) ;
        $destinationPath = 'images/';
        $file->move($destinationPath,$fileName);
        $movies->move_img = $destinationPath.$fileName;
    }
    $movies->move_title = $request->move_title;
    $movies->movie_name = $request->movie_name;
    $movies->short_description = $request->short_description;

    $movies->push();
    
    return redirect()->action('AdminController@admin');
}

}