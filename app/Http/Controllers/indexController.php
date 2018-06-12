<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehiculeModel as Vehicules;

class indexController extends Controller
{
    public function accueil(){
    	$vehicules=Vehicules::orderBy('jfon_nb_trajets', 'desc')->get();
    	
    	return view('welcome',["vehicules"=>$vehicules]);
    }

}
