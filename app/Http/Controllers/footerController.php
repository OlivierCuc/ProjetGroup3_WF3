<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class footerController extends Controller
{
    public function vieprivee(){
    	
    	return view('vieprivee');
    }

	public function mentionslegales(){
    	
    	return view('mentionslegales');
    }

	public function conditions(){
    	
    	return view('conditions');
    }

	public function sitemap(){
    	
    	return view('sitemap');
    }

    public function contact(){
    	
    	return view('contact');
    }

     public function quisommesnous(){
    	
    	return view('quisommesnous');
    }

    public function infospratiques(){
    	
    	return view('infospratiques');
    }

    public function partenaires(){
    	
    	return view('partenaires');
    }

    public function confidentialite(){
    	
    	return view('confidentialite');
    }

     public function hebergement(){
    	
    	return view('hebergement');
    }

     public function emploi(){
    	
    	return view('emploi');
    }

    public function faqs(){
    	
    	return view('faqs');
    }

    public function commentcamarche(){
    	
    	return view('commentcamarche');
    }

    public function presse(){
    	
    	return view('presse');
    }

    public function cookies(){
    	
    	return view('cookies');
    }

    public function assurance(){
    	
    	return view('assurance');
    }

    public function conseil(){
    	
    	return view('conseil');
    }


}

