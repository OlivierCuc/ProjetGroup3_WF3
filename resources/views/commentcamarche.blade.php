@extends('layouts.mainlayout')


@section('title', "Comment ça marche")

@section('contenu')

<main style="background-color: lightgrey;">
		<div class="container-fluid spnav">

			<div class="container" style="padding-top: 120px;">
				<div class="row">
					<div class="col-12 center">
						<h1 style="color: red;">Comment ça marche</h1>

						<p>Simple et économique : réservez facilement votre place en ligne et voyagez moins cher, en toute confiance. Même en dernière minute !</p><hr>

					<h2>1. Recherchez votre trajet</h2>

						<p>Précisez simplement votre destination, votre point de départ et vos horaires. Puis choisissez un trajet qui vous convient ! Si vous avez besoin de plus de renseignements, vous pouvez écrire aux conducteurs avant de réserver.</p><hr>


						<h2>2. Réservez et payez en ligne</h2>

							<p>Touchez "Réserver" votre place. Dès que ce sera fait, vous aurez le numéro de téléphone du conducteur.</p><hr>


						<h2>3. Voyagez</h2>

							<p>Bon voyage et n'oubliez pas de laisser un avis !</p><hr>
					</div>
				</div>

				<div class="row">
					<div class="col-12 center">
						<h1 style="color: red;">Conducteur</h1>

						<p>Économique et convivial : partagez vos frais en prenant des passagers sympas lors de vos longs trajets en voiture.</p><hr>

					<h2>1. Publiez votre annonce</h2>

					<p>Dites simplement où vous allez, quand vous partez et où vous aimeriez récupérer et déposer les passagers.</p><hr>


					<h2>2. Vos passagers réservent et paient en ligne</h2>

					<p>Lorsqu'un passager réserve sur votre trajet, nous vous donnons son numéro au cas où vous auriez besoin de le joindre.</p><hr>


					<h2>3. Voyagez</h2>

					<p>Partagez des anecdotes, du bon son ou un moment de tranquillité avec d'autres voyageurs.</p><hr>

					</div>
				</div>

			</div>
		</div>
	</main>
	
@endsection