<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\commentairesModel as Commentaires;

class commentairesController extends Controller
{
    public function ajout(Request $donnees){
    	$validatedData = $donnees->validate([
    		'pseudo' => 'required|string|min:5|max:20',
    		'email' => 'required|email',
    		'texte' => 'required'
    	]);
    	$comm = new Commentaires();
    	$comm->pseudocommentaire = $donnees['pseudo'];
    	$comm->emailcommentaire = $donnees['email'];
    	$comm->textecommentaire = $donnees['texte'];
    	$comm->articles_idarticle = $donnees['article'];
    	$comm->save();
    	return redirect()->back()->with('message', 'Votre commentaire est publié');
    }
}
