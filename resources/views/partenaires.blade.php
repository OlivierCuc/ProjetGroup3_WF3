@extends('layouts.mainlayout')


@section('title', "partenaires")

@section('contenu')

<main>
		<div class="container-fluid mt-5 pt-5 spnav" >
			<div class="row">
				<div class="container mt-5 center">

					<div class="col-md-12">
						<h1>Partenariat</h1><br><hr>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="assets/img/Dora.jpg" alt="Photo Dora">
								<div class="card-body">
									<p class="card-text">Nouveau partenariat avec Dora, elle nous fournit toutes les cartes routiere</p>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card" style="width: 18rem;">
								<img class="card-img-top" src="assets/img/oui.jpg" alt="Photo Oui oui">
								<div class="card-body">
									<p class="card-text">Partenariat avec oui oui depuis maintenant plus de 10 ans</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	
@endsection