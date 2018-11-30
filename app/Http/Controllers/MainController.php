<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
class MainController extends Controller
{
    public function index(Request $request){
        $data=["request"=>$request];
        return view("index",$data);
    }
    
    public function all(Request $request){
        if(App::environment('local')){
            return $request->server();
        }else{
            return "この機能はテスト環境専用です。";
        }
    }
}
