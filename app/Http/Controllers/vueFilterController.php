<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueFilterController extends Controller
{
    public function getIndex()
    {
    	return view('filter.filter');
    }
}
