@extends('layouts.master')

@section('content')
<div class="">
    <div class="row">
      <div class="col-lg-6 col-xl-6 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-body">
            <h5 class="text-center quigo-title">Inscription</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              @csrf
              
              <div class="row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="inputUserame" class="form-control" placeholder="Nom" autofocus name="name" value="{{ old('name') ? old('name') : '' }}">
                    <label for="inputUserame">Nom</label>
                    @error('name')<span class="error small">{{ $message }}</span>@enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" value="{{ old('email') ? old('email') : '' }}">
                    <label for="inputEmail">Email</label>
                    @error('email')<span class="error small">{{ $message }}</span>@enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" name="password" value="{{ old('password') ? old('password') : '' }}">
                    <label for="inputPassword">Password</label>
                    @error('password')<span class="error small">{{ $message }}</span>@enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Mot de passe de confirmation" name="password_confirmation" ƒ>
                    <label for="inputConfirmPassword">Mot de passe de confirmation</label>
                    @error('password_confirmation')<span class="error small">{{ $message }}</span>@enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <label for="file-upload" class="custom-file-upload">
                    <i class="fas fa-cloud-upload-alt mr-2 py-3 mx-4 px-2"></i>Choissiser une photo de profile
                  </label>
                  <input class="form-control" id="file-upload" name="avatar" type="file">
                </div>
                @error('avatar')<span class="error small mr-4">{{ $message }}</span>@enderror
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">s'enregistrer</button>
              <h5><a class="d-block text-center mt-2" href="{{ route('login') }}">se connecter</a></h5>

              <hr class="my-4">
              <div class="row">
                <div class="col-md-6"><a class="btn btn-lg btn-google btn-block text-uppercase" href="{{route('google')}}"><i class="fab fa-google mr-2"></i>S'inscrire avec Google</a></div>
                <div class="col-md-6"><a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{ route('facebook') }}"><i class="fab fa-facebook-f mr-2"></i>S'inscrire avec Facebook</a></div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @stop