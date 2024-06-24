<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;


class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare variables
        $name = "Donal Trump";
        $age = "75";

        // Store data in an associative array
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age
        ];

        // Create a cookie
        $cookie = cookie(
            'access_token', 
            '123-XYZ',    
            1,           
            '/',      
            $_SERVER['SERVER_NAME'], 
            false,        
            true       
        );

        // Return response with data and cookies
        return response()->json($data, 200)->cookie($cookie);
    }
}

