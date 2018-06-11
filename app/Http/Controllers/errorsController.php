<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class errorsController extends Controller
{
    public function pagenontrouvee(){
    	return view('\errors\404');
    }
}
