<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function country_list(){
        return response()->download(public_path('user.jpg'),'user Image');
    }

    public function country_save(Request $request){
        $filename="user.jpg";
        $path=$request->file('photo')->move(public_path('/'),$filename);
        $photoUrl=url('/'.$filename);
        return response()->json(['url'=>$photoUrl],200);
    }
}
