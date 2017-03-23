<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use home;

class homeController extends Controller
{
    public function index()
    {
    	$sum = 5+6;
    	//return $sum;
    	return view('welcome',compact('sum'));
    }
}
