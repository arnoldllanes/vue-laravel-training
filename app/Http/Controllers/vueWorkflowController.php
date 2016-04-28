<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class vueWorkflowController extends Controller
{
    public function getIndex()
    {
    	return view('workflow.workflow');
    }
}
