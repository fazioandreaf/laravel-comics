<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPage extends Controller
{
    public function home(){
        $name='Pippo';
        return view('pages.home',compact('name'));
    }
}
