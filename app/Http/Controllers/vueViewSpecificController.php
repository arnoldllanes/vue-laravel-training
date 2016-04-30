<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueViewSpecificController extends Controller
{
    public function getIndex()
    {
    	return view('view.content');
    }
}
