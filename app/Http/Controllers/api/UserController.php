<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;
use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function Registra(Request $request){
        
        $name = $request->input('name');
        $last_name = $request->input('last_name');
        $email = $request->input('email');

        $passwors = 'admin';
        $crypt_password = Crypt::encrypt($passwors);
        $user = new UserModel();
        $user->name = $name;
        $user->last_name = $last_name;
        $user->email = $email;
        $user->password = $crypt_password;
        $user->token_access = Str::random(10);
        $user->save();


        return response()->json(['msg' => 'Api de crear un usuario', 'inputs' => $request->all() ], 200);
    }
}
