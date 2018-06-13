@extends('layouts.mainlayout')


@section('title', "Profil")

@section('contenu')
<main class="container">
	<div class="row">
		<section class="col">
			<h1>Page d'administration</h1>
			<h2>Liste des Utilisateurs</h2>
			@if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div> 
            @endif
			<div class="row">
				<section class="col-3">Pseudo</section>
				<section class="col-3">E-mail</section>
				<section class="col-3">Rôle</section>
				<section class="col-3">Actions</section>
				@foreach($users as $user)
					<section class="col-3">
						<p>{{ $user->name }}</p>
					</section>
					<section class="col-3">
						<p>{{ $user->email }}</p>
					</section>
					<section class="col-3">
						<p>{{ $user->role }}</p>
					</section>
					<section class="col-3">
					@if( $user->role != '4' AND $user->role != '0' )
						<a href="{{ route('bannir', ['id' => $user->iduser]) }}">Bannir</a>
					@elseif($user->role != '4' AND $user->role == '0')
						<a href="{{ route('bannir', ['id' => $user->iduser]) }}">Réintégrer</a>
					@endif
						<a href="{{ route('modifuser', ['id' => $user->iduser]) }}">Modifier</a>
						<a href="#" data-toggle="modal" data-target="#confirmModale4" data-id='{{ $user->iduser }}' data-nom='{{ $user->name }}'>(Supprimer)</a>
					</section>
				@endforeach
				<!-- Modal -->
		        <div class="modal fade" id="confirmModale4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		          <div class="modal-dialog" role="document">
		            <div class="modal-content">
		              <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                  <span aria-hidden="true">&times;</span>
		                </button>
		              </div>
		              <div class="modal-body">
		                <p class="modal-text"></p>
		              </div>
		              <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
		                {{-- <form action="{{ route('supprCategorie') }}" method="post">
		                    {{ csrf_field() }}
		                   <button type="submit" class="btn btn-primary">Supprimer</button>
		                   <input id="idhidden" type="hidden" name="idcategorie" value=""> 
		                </form> --}}
		                <a type="button" class="btn btn-primary" id="confirm">Supprimer</a>
		              </div>
		            </div>
		          </div>
		        </div>
			</div>	
		</section>
	</div>
</main>
@endsection