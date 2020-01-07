<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\data_link;
use Illuminate\Support\Facades\DB;

class shorten extends Controller
{

    public function index()
    {

        return view('index');
    }
    
    public function redirect($code)
    {

       $link=data_link::where('code',$code)->first();
    
       
        return redirect($link->link);
    }

    public function input_link(Request $request)
    {
        $data_link = new data_link;
        $data_link->link = $request->link;
        $data_link->code=$request->code;
        $data_link->save();
        $s=$data_link->id;
        $link=data_link::where('id',$s)->first();

        return redirect('http://test.test/')->with(['success' => $link->code]);
    }

// public function index2()
// {
//    return view('pesan')->with(['success' => 'Pesan Berhasil']);
// }
// public function pesan()
// {
//    return redirect('http://test.test/')->with(['success' => 'Pesan Berhasil']);
// }

}
