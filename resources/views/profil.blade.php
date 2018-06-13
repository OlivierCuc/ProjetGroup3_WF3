@extends('layouts.mainlayout')


@section('title', "Profil")

@section('contenu')
<main class="container-fluid">
	<div class="container">
		<div class="row">
			<section class="col-12" style="text-align: center;">
				<div class="card" style="width: 25rem;">
					<img class="card-img-top" src="{{ photo }}" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title">{{ nom de profil }}</h5>
						<p class="card-text">
						Nom : {{  }}<br>
						Prénom : {{  }}<br>
						Date de naissance : {{  }}<br>
						E-mail : {{  }}<br>
						Photo : {{  }}<br>
						Votre note : {{  }}<br>
						Note général : {{  }}<br>
						Numéro tel : {{  }}<br>
						Sexe/genre : {{  }}<br>
						Compte vérifié : {{  }}<br>
						Votre position favorite : {{  }}<br>
						Newsletter : {{  }}<br>
						Date création compte : {{  }}</p>

						<a href="{{ route('modif') }}" class="btn btn-primary">Modifier le profil</a>
					</div>
				</div>
			</section>
		</div>
	</div>
</main>
@endsection  