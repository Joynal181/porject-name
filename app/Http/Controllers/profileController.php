<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function index($id){
        $name = 'Donal Trump';
        $age = '75';

        $data = [
            'id' => $id, 
            'name' => $name,
            'age' => $age,
        ];

        $cookie_name = "access_token";
        $cookie_value = "123_XYZ";
        $cookie_time = 1;
        $cookie_domain = $_SERVER['SERVER_NAME'];
        $cookie_secure = false;
        $cookie_httpOnly = true;
        
        $cookie = cookie($cookie_name, $cookie_value ,$cookie_time, $cookie_domain, $cookie_secure, $cookie_httpOnly);


        return response()->json(
            $data, 200
        )->cookie($cookie);
    }
}
