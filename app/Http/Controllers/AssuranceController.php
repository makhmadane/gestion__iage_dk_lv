<?php

namespace App\Http\Controllers;

use App\Models\Assurance;
use Illuminate\Http\Request;

class AssuranceController extends Controller
{
    function index(){

       $assurances =  Assurance::all();  //Model

        return view('assurance',['assurs'=>$assurances]); //view

    }
}
