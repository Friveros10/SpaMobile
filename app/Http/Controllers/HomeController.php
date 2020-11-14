<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user=Auth::user();
        if (Auth::check()){
            if ($user->esAdmin()){
                echo "Eres usuario administrador.";
                return view('Admin.mainAdmin', compact('user'));
           } else{
                echo "Eres usuario, NO ADMINISTRADOR.";
                return view('User.mainUser',  compact('user'));    
            }
    }
        

       
    }

   
 
    
}
