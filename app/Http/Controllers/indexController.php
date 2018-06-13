<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vehiculeModel as Vehicules;
use App\statistiquesModel as Stats;

class indexController extends Controller
{
    public function accueil(){
    	$vehicules=Vehicules::orderBy('jfon_nb_trajets', 'desc')->get();
    	$statistiques=Stats::first();
    	return view('welcome',["vehicules"=>$vehicules,'statistiques'=>$statistiques]);
    }

}
