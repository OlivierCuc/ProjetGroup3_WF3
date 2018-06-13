<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\listearticlesModel as Articles;
use App\listecommentairesModel as ListeCommentaires;
use App\articleModel as Article;
use App\commentairesModel as Commentaires;
use App\categoriesModel as Categories;
use App\articlehascategoriesModel as ArthasCateg;
use App\articlehasmotscleModel as MotsArticle;
use App\motscleModel as Motscle;
use App\User as User;

class adminController extends Controller
{
	// Accueil de l'administration
    public function accueil(){
    	if(Auth::User()->role == 4){
	        $articles = Articles::count();
	        $commentaires = Commentaires::count();
	        $activecomments = Commentaires::where('activecommentaire', 1)->count();
	        $categories = Categories::count();
	        $users = User::count();
	        return view('admin.accueil',['articles' => $articles,'comment' => $commentaires,'activecomment' => $activecomments,'categ' => $categories,'users' => $users]);
    	}else{
    		return abort('404');
    	}
    }

    // Administration des catégories
    public function categories(){
    	if(Auth::User()->role == 4){
	        $categories = Categories::orderBy('nomcategorie', 'asc')->get();
	        return view('admin.categories',['categ' => $categories]);
    	}else{
    		return abort('404');
    	}
    }

    // Administration des articles
    public function articles(){
    	if(Auth::User()->role == 4){
	        $articles = Articles::orderBy('datearticle', 'desc')->paginate(9);
	        return view('admin.articles',['articles' => $articles]);
    	}else{
    		return abort('404');
    	}
 	}

 	// Ajout d'un article
    public function ajoutarticle(){
    	if(Auth::User()->role == 4){
	        $categories = Categories::orderBy('nomcategorie', 'asc')->get();
	        $motscle = Motscle::orderBy('motcle', 'asc')->get();
	        return view('admin.ajoutarticle',['categ' => $categories,'motscle' => $motscle]);
    	}else{
    		return abort('404');
    	}
 	}

 	// Modification d'un article
    public function modifarticle($id){
   		$article = Articles::where('idarticle', $id)->first();
    	if(Auth::User()->role == 4 || Auth::User()->iduser == $article->users_iduser){
	        $categories = Categories::orderBy('nomcategorie', 'asc')->get();
	        $motscle = Motscle::orderBy('motcle', 'asc')->get();
	        $article = Articles::find($id);
	        return view('admin.modifarticle',['categ' => $categories,'motscle' => $motscle, 'article' => $article]);
    	}else{
    		return abort('404');
    	}
 	}

 	// Suppression d'un article
    public function deletearticle($id){
    	if(Auth::User()->role == 4){
	        $article = Articles::find($id);
			Commentaires::where('articles_idarticle',$id)->delete();
			ArthasCateg::where('articles_idarticle',$id)->delete();
            MotsArticle::where('articles_idarticle',$id)->delete();
            if (!empty($article->featuredimage)) {
			    try{
			    	unlink(public_path("assets/img/uploads/featured/").$article->featuredimage);
			    } catch(Exception $e){}
			}
            Article::destroy($id);
			return redirect()->back()->with('message', 'Article supprimé avec succès !');
    	}else{
    		return abort('404');
    	}
 	}

 	// Publication et modification des articles
    public function postarticle(Request $donnees){
		$validatedData = $donnees->validate([
			'titre' => 'required|max:255',
			'contenuarticle' => 'required',
			'categories' => 'required',
			'motscle' => 'required',
			'logo' => 'required_unless:edit,true|image|max:500'
		]);
		if (isset($donnees['edit']) && $donnees['edit']=="true"){
			if ($donnees->hasFile('logo')) {
				if (isset($donnees['oldimage'])) {
			        unlink(public_path("assets/img/uploads/featured/").$donnees['oldimage']);
			    }
				$logoPath = time().'.'.$donnees->logo->getClientOriginalExtension();
				$donnees->logo->move(public_path('/assets/img/uploads/featured'), $logoPath);
			}
			Article::where('idarticle', $donnees["idart"])->update([
				"titrearticle"=> $donnees['titre'],
				"slugarticle"=> str_slug($donnees['titre'],'-'),
				"contenuarticle"=> $donnees['contenuarticle'],
				"featuredimage" => (isset($logoPath)) ? $logoPath : $donnees['oldimage'],
			]);
			ArthasCateg::where('articles_idarticle',$donnees["idart"])->delete();
            foreach($donnees['categories'] as $cat){
                $catsarticle = new ArthasCateg();
                $catsarticle->categories_idcategories = $cat;
                $catsarticle->articles_idarticle = $donnees['idart'];
                $catsarticle->save();
            }
            MotsArticle::where('articles_idarticle',$donnees["idart"])->delete();
            foreach($donnees['motscle'] as $mot){
                $motsarticle = new MotsArticle();
                $motsarticle->motscle_idmotscle = $mot;
                $motsarticle->articles_idarticle = $donnees['idart'];
                $motsarticle->save();
            }
			return redirect()->back()->with('message', 'Article modifié avec succès !');
		}else{
			if ($donnees->hasFile('logo')) {
				$logoPath = time().'.'.$donnees->logo->getClientOriginalExtension();
				$donnees->logo->move(public_path('/assets/img/uploads/featured'), $logoPath);
			}
	        $article = new Article();
	        $article->titrearticle = $donnees['titre'];
	        $article->slugarticle = str_slug($donnees['titre'],'-');
	        $article->contenuarticle = $donnees['contenuarticle'];
	        $article->users_iduser = Auth::User()->iduser;
			$article->featuredimage= $logoPath;
	        $article->save();
	        $articleid = $article->idarticle;
			foreach($donnees['categories'] as $cat){
			    $catsarticle = new ArthasCateg();
			    $catsarticle->categories_idcategories = $cat;
			    $catsarticle->articles_idarticle = $articleid;
			    $catsarticle->save();
			}
			foreach($donnees['motscle'] as $mot){
			    $motsarticle = new MotsArticle();
			    $motsarticle->motscle_idmotscle = $mot;
			    $motsarticle->articles_idarticle = $articleid;
			    $motsarticle->save();
			}
			return redirect()->back()->with('message', 'Article créé avec succès avec l\'ID '.$articleid.' !');
		}
 	}

 	// Publication d'une catégorie
    public function postcategorie(Request $donnees){
    	if(Auth::User()->role == 4){
			$validatedData = $donnees->validate([
				'name' => 'required|max:255',
			]);
			$cat= new Categories();
			$cat->nomcategorie= $donnees['name'];
			$cat->slugcategorie= str_slug($donnees['name'],'-');
			$cat->save();
	    	return redirect()->back()->with('message', 'Catégorie créée');
    	}else{
    		return abort('404');
    	}
	}

	// Suppression d'une catégorie
 	public function supprcategorie($id){
    	if(Auth::User()->role == 4){
			ArthasCateg::destroy($id);
			Categories::destroy($id);
			return redirect()->back()->with('message', 'Catégorie supprimée avec succès !');
    	}else{
    		return abort('404');
    	}
 	}

 	// Affichage des commentaires
 	public function commentaires(){
    	if(Auth::User()->role == 4){
			$listcomm = ListeCommentaires::get();
			return view('admin.commentaires', ['commentaires' => $listcomm]);
    	}else{
    		return abort('404');
    	}
 	}

 	// Activation et désactivation des commentaires
 	public function commentairestoggle($id){
    	if(Auth::User()->role == 4){
			$comm = ListeCommentaires::where('idcommentaire', $id)->first();
			$active = ($comm->activecommentaire == 1) ? 0 : 1;
			Commentaires::where('idcommentaire', $id)->update([
				"activecommentaire"=> $active,
			]);
	    	return redirect()->back()->with('message', 'Modification effectuée');
     	}else{
    		return abort('404');
    	}
	}

	// Suppression d'un commentaire
 	public function supprcommentaire($id){
    	if(Auth::User()->role == 4){
			Commentaires::destroy($id);
			return redirect()->back()->with('message', 'Commentaire supprimé avec succès !');
    	}else{
    		return abort('404');
    	}
 	}

 	// Affichage des utilisateurs
 	public function utilisateurs(){
    	if(Auth::User()->role == 4){
			$users = User::get();
			return view('admin.utilisateurs', ['users' => $users]);
    	}else{
    		return abort('404');
    	}
 	}

 	// Modification d'un utilisateur
 	public function modifuser($id){
    	if(Auth::User()->role == 4){
			$user = User::where('iduser', $id)->first();
			return view('admin.modifuser', ['user' => $user]);
    	}else{
    		return abort('404');
    	}
 	}

 	// Sauvegarde d'un utilisateur
 	public function postuser(Request $donnees){
    	if(Auth::User()->role == 4){
			$validatedData = $donnees->validate([
				'name' => 'required|max:255',
				'email' => 'required|email',
				'role' => 'required',
			]);
			User::where('iduser', $donnees["iduser"])->update([
				"name"=> $donnees['name'],
				"email"=> $donnees['email'],
				"role"=> $donnees['role'],
			]);
	    	return redirect()->route('utilisateurs')->with('message', 'Utilisateur modifié !');
    	}else{
    		return abort('404');
    	}
 	}

 	// Bannissement d'un utilisateur
 	public function banuser($id){
    	if(Auth::User()->role == 4){
			User::where('iduser', $id)->update([
				"role"=> 0,
			]);
	    	return redirect()->back()->with('message', 'Utilisateur banni !');
    	}else{
    		return abort('404');
    	}
 	}

 	// Suppression d'un utilisateur
 	public function deleteuser($id){
    	if(Auth::User()->role == 4){
			User::destroy($id);
			return redirect()->back()->with('message', 'Utilisateur supprimé avec succès !');
    	}else{
    		return abort('404');
    	}
 	}
}