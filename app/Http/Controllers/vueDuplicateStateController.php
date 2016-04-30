<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueDuplicateStateController extends Controller
{
    public function getIndex()
    {
    	return view('duplicate.duplicate');
    }
}
