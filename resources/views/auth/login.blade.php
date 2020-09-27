@extends('layouts.master')

@section('content')

<div class="">
    <div class="row mt-4">
      <div class="col-md-12">
          @if (session()->has('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
          @endif
          @if (session()->has('error'))
              <div class="alert alert-danger">
                  {{ session('error') }}
              </div>
          @endif
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="text-center quigo-title">Connexion</h5>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email">
                <label for="inputEmail">Email</label>
                @error('email')<span class="error small">{{ $message }}</span>@enderror
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password">
                <label for="inputPassword">Password</label>
                @error('password')<span class="error small">{{ $message }}</span>@enderror
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">se connecter</button>
              <div class="row">
                <div class="col-6">
                  <a class="d-block text-center mt-2" data-toggle="modal" data-target="#exampleModalCenter" type="submit">Mot de passe oublier ?</a>
                </div>
                <div class="col-6">
                  <a class="d-block text-center mt-2" type="submit">S'inscrire</a>
                </div>
              </div>
              <hr class="my-4">
              <a class="btn btn-lg btn-google btn-block text-uppercase" href="{{route('google')}}"><i class="fab fa-google mr-2"></i>S'inscrire avec Google</a>
              <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{ route('facebook') }}"><i class="fab fa-facebook-f mr-2"></i>S'inscrire avec Facebook</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title" id="exampleModalLongTitle">Modification du Mot de Passe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('password.email') }}">
          @csrf

          <div class="form-group row">
              <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

              <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
              </div>
          </div>

          <div class="form-group row mb-0">
              <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-success">
                     envoyer
                  </button>
              </div>
          </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  @stop