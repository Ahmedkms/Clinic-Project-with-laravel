<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    
    public function doctor_index(){
        return view('doctor.doctor-index');
    }

    public function booking(){
        return view('doctor.doctor');
    }

    
    public function majors(){
        return view('majors');
    }
    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }

    public function contactView(){
        return view('contact');
    }

    public function contactAction(Request $request){
        // dd($_POST);
        // dd($request->all());
        // dd($request->only('name'));
        //retutrn array except key parameters
        // dd($request->except('name'));
        // dd($request->except(['name','phone']));
        // return string 
        // dd($request->get('name','ahmed')); 
        // return string
        // dd($request->post('name'));
        //return just the parameter and return string 
        // dd($request->input('phone'));
        return view('contact')->with(session()->put('success','your message added successfully'))
        ->with(session()->put('name', $request->input()['name']));
        
        
    }
}

