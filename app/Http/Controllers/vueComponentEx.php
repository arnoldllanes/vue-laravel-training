<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueComponentEx extends Controller
{
    public function getIndex(){
    	return view('component.component');
    }
}
