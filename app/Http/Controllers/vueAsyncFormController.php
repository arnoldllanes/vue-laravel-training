<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueAsyncFormController extends Controller
{
    public function getIndex()
    {
    	return view('async.form');
    }
}
