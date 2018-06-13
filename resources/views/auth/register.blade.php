@extends('layouts.mainlayout')

@section('title', "Connexion")  

@section('contenu')

<div class="container spnav" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Création de votre propre profil Cococar') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        {{-- Ajout nom --}}
                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="nom" type="text" class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus placeholder="Votre nom de famille">

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        {{-- Ajout prénom --}}
                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control{{ $errors->has('prenom') ? ' is-invalid' : '' }}" name="prenom" value="{{ old('prenom') }}" required autofocus placeholder="Votre prénom">

                                @if ($errors->has('prenom'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('prenom') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Ajout adresse 1--}}
                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" name="adresse" value="{{ old('adresse') }}" required autofocus placeholder="Votre adresse">

                                @if ($errors->has('adresse'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Ajout adresse 2--}}
                        <div class="form-group row">
                            <label for="adresse2" class="col-md-4 col-form-label text-md-right">{{ __('Adresse2') }}</label>

                            <div class="col-md-6">
                                <input id="adresse2" type="text" class="form-control{{ $errors->has('adresse2') ? ' is-invalid' : '' }}" name="adresse2" value="{{ old('adresse2') }}"  placeholder="lieu dit - batiment - étage">

                                @if ($errors->has('adresse2'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('adresse2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Ajout code postal--}}
                        <div class="form-group row">
                            <label for="codepostal" class="col-md-4 col-form-label text-md-right">{{ __('Code postal') }}</label>

                            <div class="col-md-6">
                                <input id="codepostal" type="text" class="form-control{{ $errors->has('codepostal') ? ' is-invalid' : '' }}" name="codepostal" value="{{ old('codepostal') }}" required autofocus placeholder="Votre code postal">

                                @if ($errors->has('codepostal'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('codepostal') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Ajout ville--}}
                        <div class="form-group row">
                            <label for="ville" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control{{ $errors->has('ville') ? ' is-invalid' : '' }}" name="ville" value="{{ old('ville') }}" required autofocus placeholder="Votre ville">

                                @if ($errors->has('ville'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ville') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        {{-- Ajout date de naissance--}}
                        <div class="form-group row">
                            <label for="naissance" class="col-md-4 col-form-label text-md-right">{{ __('Naissance') }}</label>

                            <div class="col-md-6">
                                <input id="naissance" type="date" class="form-control{{ $errors->has('naissance') ? ' is-invalid' : '' }}" name="naissance" value="{{ old('naissance') }}" required autofocus placeholder="Votre date de naissance">

                                @if ($errors->has('naissance'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('naissance') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        {{-- Ajout email --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Votre Adresse Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Votre mot de passe">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirmer votre mot de passe merci">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('S\'inscrire') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
