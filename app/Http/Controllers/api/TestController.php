<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(Request $request){
        return response()->json(['version' => '0.0.1'], 200 );
    }
}
