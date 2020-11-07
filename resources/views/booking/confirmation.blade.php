@extends('layouts.master')


@section('content')

<div class="my-5 py-2">
    <div class="mt-5 h-100 w-100 mb-5">
        <div class="jumbotron text-center">
            <h1 class="display-3">confirmation de reservation</h1>
            <p class="lead text-justify text-wrap text-center">
                <strong>merci pour avoir accepter la reservation de (ici viens le nom de la personne) <br>
                pour le post (une description du post) il vous reste exactement tels nombre de kilos.
            </p>
            <hr>
            <p class="lead">
              <a class="btn btn-primary btn-sm" href="{{ route('accueil') }}" role="button">continuer sur la page d accueil</a>
            </p>
          </div>
      </div>
  </div>

@stop