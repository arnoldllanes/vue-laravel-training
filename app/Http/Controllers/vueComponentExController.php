<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueComponentExController extends Controller
{
    public function getIndex(){
    	return view('component.component');
    }
}
