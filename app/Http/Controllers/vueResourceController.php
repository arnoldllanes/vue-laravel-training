<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueResourceController extends Controller
{
    public function getIndex() 
    {
    	return view('resource.resource');
    }
}
