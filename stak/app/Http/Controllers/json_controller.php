<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class json_controller extends Controller
{
    public function index(){
        $strings = json_decode(file_get_contents(storage_path() . "/myjson/json.json"), true);



        return view('folders')->with('strings',$strings);
    }
}
