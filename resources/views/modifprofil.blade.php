@extends('layouts.mainlayout')


@section('title', "modifier profil")

@section('contenu')
<main>
		<div class="container-fluid template">
			<div class="row">
				<div class="container registerform">
					<div class="col-md-12 order-md-1">
          <h4 class="mb-3 center">Votre inscription sur Cococar en tant que particulier :</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nom</label>
                <input type="text" class="form-control" id="firstName" placeholder="Nom" value="" required>
                <div class="invalid-feedback">
                  Un Nom valide est requis.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Prénom</label>
                <input type="text" class="form-control" id="lastName" placeholder="Prénom" value="" required>
                <div class="invalid-feedback">
                  Un prénom valide est requis.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optionnel)</span></label>
              <input type="email" class="form-control" id="email" placeholder="vous@exemple.com">
              <div class="invalid-feedback">
                S'il vous plaît entrez une adresse email valide pour les mises à jour d'expédition.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Adresse</label>
              <input type="text" class="form-control" id="address" placeholder="Votre adresse avenue...." required>
              <div class="invalid-feedback">
                Prière d'indiquer votre adresse.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Adresse 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Suite de votre adresse">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Pays</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Votre Pays</option>
                  <option>France</option>
                  <option>Belgique</option>
                  <option>Reunion</option>
                  <option>Ile Maurice</option>
                  <option>Guyane</option>
                  <option>France</option>
                </select>
                <div class="invalid-feedback">
                  Veuillez sélectionner un pays valide
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">Ville</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Ville ...</option>
                  <option>Auxerre</option>
                  <option>Paris</option>
                  <option>lyon</option>
                  <option>Auxerre</option>
                  <option>Auxerre</option>
                </select>
                <div class="invalid-feedback">
                  Veuillez sélectionner un pays valide
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Code postal</label>
                <input type="text" class="form-control" id="zip" placeholder="exemple 89 000 ou 89000" required>
                <div class="invalid-feedback">
                  Code postal obligatoire.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Une autre personne à ajouter</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Newsletter</label>
            </div>
            
            <div>
             <label for="bday">Veuillez saisir votre date de naissance :</label>
              <input type="date" id="bday" name="bday">
            </div>
            
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Enregistrer et continuer</button>
          </form>
				</div>
			</div>
		</div>		
	</main>    