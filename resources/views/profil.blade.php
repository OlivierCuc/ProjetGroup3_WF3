@extends('layouts.mainlayout')


@section('title', "Profil")

@section('contenu')
<main class="container">
	<div class="row">
		<section class="col">
			<h1>Profil de {{ Auth::user()->name }}</h1>
			<a href="{{ route('modif') }}">Modifier le profil</a>
			<p>Nom : {{ Auth::user()->name }}</p>
			<p>E-mail : {{ Auth::user()->email }}</p>
		</section>
	</div>
</main>
@endsection