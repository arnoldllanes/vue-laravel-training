<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueAnimationsController extends Controller
{
    public function getIndex()
    {
    	return view('animate.animate');
    }
}
