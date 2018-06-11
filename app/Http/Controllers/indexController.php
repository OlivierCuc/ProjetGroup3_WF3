<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
use App\vehiculeModel as Vehicules;
=======
>>>>>>> Front

class indexController extends Controller
{
    public function accueil(){
<<<<<<< HEAD
    	$vehicules=Vehicules::orderBy('jfon_nb_trajets', 'desc')->get();
    	
    	return view('welcome',["vehicules"=>$vehicules]);
=======
    	
    	return view('welcome');
>>>>>>> Front
    }

}
