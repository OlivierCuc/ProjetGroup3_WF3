<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

class usersController extends Controller
{
    public function profil(){
    	return view('profil');
    }

    public function modif(){
        

    	return view('modifprofil');//->with('message', 'Votre profil a été modifié avec succès');
    }

    public function validemodif(Request $donnees){
        $id = Auth::User()->iduser;
                $validatedDate = $donnees->validate([
                    'pseudo' => 'required|string|min:5|max:20',  
                    'email' => 'required|confirmed',
                    'password' => 'nullable|string|min:6|confirmed',
                ]);
        $password = Hash::make($donnees['password']);

        User::where('iduser', $id)->update(['name' => $donnees['pseudo'], 'email' => $donnees['email'], 'password' => $password]);

        return redirect()->back()->with('message', 'Votre profil a été modifié avec succès');
    }
}
