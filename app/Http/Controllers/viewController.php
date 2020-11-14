<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class viewController extends Controller{
    
    
    public function adminDash(){
        return view('admin.index');
    }
    
}