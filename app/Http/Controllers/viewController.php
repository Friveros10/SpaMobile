<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class viewController extends Controller{
    
    
    public function about(){
        return view('Admin.about');
    }
    public function locales()
    {
        
        return view('Admin.local');
    }
    public function users()
    {
        
        return view('Admin.user');
    }
    public function bandejas()
    {
        
        return view('Admin.bandejas');
    }
    public function registerU()
    {
        
        return view('Admin.RegistrarUsuarios');
    }

    public function balance()
    {
        
        return view('Admin.balance');
    }

    public function registrarL()
    {
        return view('Admin.registro');
    }

    //vistas user
    public function register()
    {
        
        return view('User.mainUser');
    }
    public function registros()
    {
        
        return view('User.misRegistros');
    }
    public function misLocales()
    {
        return view('User.local');
    }
    public function abouUsert()
    {
        return view('User.about');
    }


    
}