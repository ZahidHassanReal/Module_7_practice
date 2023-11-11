<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class OstadController extends Controller
{

        function login($email , $password){
            $email = $_POST['ostad@mail.com'];
            $password = $_POST['password'];
        if ($email == "ostad@mail.com" && $password == "password") {
            return "Login successful";
        }
            else {
            return"Invalid credentials";
        }

}
}
