<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	//
	public function index($value='')
	{
		return view ('index');
	}
	public function about($value='')
	{
		return view ('about');
	}
	public function menu($value='')
	{
		return view ('menu');
	}
	public function contact($value='')
	{
		return view ('contact');
	}
    
    
	
}
