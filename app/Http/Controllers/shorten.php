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
        $data_link= data_link::get();
        $same=true;
        $succes="";
        $failed="";
        foreach($data_link as $data)
        {
            if($request->code == $data->code){
                $same=false;
                $failed="Sorry,domain ".$request->code." has already used ,please type another domain";
            }
        }
        if($same==true){
            $data_link = new data_link;
            $data_link->link = $request->link;
            $data_link->code=$request->code;
            $data_link->save();
            $s=$data_link->id;
            $link=data_link::where('id',$s)->first();
            $succes =$link->code;
        }
       
        
       return redirect('/')->with(['success' => $succes,'failed'=>$failed]);
    }

}
