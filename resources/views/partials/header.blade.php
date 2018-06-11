<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Fichiers css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome-all.css')}}">
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/styles.css') }}">


		<!-- Fichiers JS -->
		<script type="text/javascript" src="{{ asset('assets/js/jquery-3.3.1.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>
		<script type="text/javascript" src="{{ asset('assets/js/scripts.js') }}"></script>

		<title>@yield('title') - {{ config('app.name') }}</title>
	</head>
	<body>
		<header class="container-fluid"  >
		<section class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top"> <!-- Début de la NavBar   -->
				<a class="navbar-brand" href="#">
					<img src="assets/img/logo_coco.png" width="100" height="100" class="d-inline-block align-top" alt="Logo de notre entreprise">
				</a>   
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Publier votre Annonce</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="#">Recherche</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Inscription</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Connexion</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Deconnexion</a>
						</li>
						
					</ul>
				</div>
			</nav><!-- /Fin de la NavBar   -->
		</section><!-- /fin du Container  -->
	</header><!-- /fin du header  -->