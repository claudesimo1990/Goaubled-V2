@extends('layouts.master')

@section('content')
<div class="">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="text-center quigo-title">Inscription</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              @csrf
              <div class="form-label-group">
                <input type="text" id="inputUserame" class="form-control" placeholder="Nom" autofocus name="name">
                <label for="inputUserame">Nom</label>
                @error('name')<span class="error small">{{ $message }}</span>@enderror
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email">
                <label for="inputEmail">Email</label>
                @error('email')<span class="error small">{{ $message }}</span>@enderror
              </div>

              <div class="form-label-group">
                <input type="file" id="inputAvatar" class="form-control" placeholder="Avatar" name="avatar">
                <label for="inputAvatar">Avatar</label>
                @error('avatar')<span class="error small">{{ $message }}</span>@enderror
              </div>
              
              <hr>

              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="password">
                <label for="inputPassword">Password</label>
                @error('password')<span class="error small">{{ $message }}</span>@enderror
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Mot de passe de confirmation" name="password_confirmation">
                <label for="inputConfirmPassword">Mot de passe de confirmation</label>
                @error('password_confirmation')<span class="error small">{{ $message }}</span>@enderror
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">s'enregistrer</button>
              <a class="d-block text-center mt-2" type="submit">se connecter</a>
              <hr class="my-4">
              <a class="btn btn-lg btn-google btn-block text-uppercase" href="{{route('google')}}"><i class="fab fa-google mr-2"></i>S'inscrire avec Google</a>
              <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{ route('facebook') }}"><i class="fab fa-facebook-f mr-2"></i>S'inscrire avec Facebook</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop