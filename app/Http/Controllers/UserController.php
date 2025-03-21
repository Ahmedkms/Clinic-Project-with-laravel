<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function addNewuser(Request $request){
        // first we must validate all inputs 
        $validator = Validator::make($request ->all(),[
            'name' => 'required|max:100|',
            'email' => 'required|unique:users,email',
            'phone' => 'required|unique:users,phone'
        ]);
        if($validator ->fails()){
            return $validator->errors();
        }

        // second step we should store this inputs
        User::create([
            'name' =>  $request->name , 
            'email' => $request-> email, 
            'password'=> $request -> password,
            'phone' =>  $request -> phone

        ]);
        return "User added successfully";
    }
}
