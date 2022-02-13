<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }

    public function register(Request $req){
        echo "form submitted sucessfully<br> The data filled by you <br>";
        echo '<pre>';
        print_r($req->all());
        die; 
    }

    public  function registerValidation(Request $req){

        $req->validate(
            [
        'fullName' => 'required',
        'gmailAddress'=>'required|email',
         'address' =>'required',
         'phoneNumber'=>'required',
         'password' =>'required|confirmed',
         'password_confirmation'=>'required',
        //  'password' =>'required',
        //  'password_confir'=>'required|same:password',

            ]
        );
        echo "form submitted sucessfully<br> The data filled by you <br>";
        echo '<pre>';
        print_r($req->all());
        die; 
    }
}
