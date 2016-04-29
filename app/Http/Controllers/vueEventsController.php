<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueEventsController extends Controller
{
    public function getIndex()
    {
    	return view('events.events');
    }
}
