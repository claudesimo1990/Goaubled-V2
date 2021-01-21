@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
@stop

@section('content')
    <main class="d-flex align-items-center min-vh-100 py-5 my-5 py-md-0">
        <div class="container">
            <div class="card login-card">
                <div class="row no-gutters">
                    <div class="col-md-5">
                        <img src="{{asset('/images/imgs/login.jpeg')}}" alt="login" class="login-card-img">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <div class="brand-wrapper">
                                <h4><a href="{{route('accueil')}}" class="scrollto">Go<span>AuBled</span></a> - Inscription</h4>
                            </div>
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="picture-container">
                                    <div class="picture @error('avatar') picture-error @enderror my-4">
                                        <img src="{{ asset('/img/avatar.jpg') }}" class="picture-src" id="wizardPicturePreview" title="" alt="">
                                        <input type="file" name="avatar" id="wizard-picture">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name" class="sr-only">Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Nom">
                                    @error('name')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="sr-only">{{ __('E-Mail Address') }}</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    @error('email')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Mot de passe">
                                    @error('password')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group mb-4">
                                    <label for="password" class="sr-only">Password confirmation</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Confirmation du mot de passe">
                                    @error('password_confirmation')<span class="error small">{{ $message }}</span>@enderror
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-block login-btn mb-4" type="submit">S'inscrire</button>
                                </div>
                            </form>
                            <p class="login-card-footer-text">deja un compte? <a href="{{ route('login') }}" class="text-reset">Login</a></p>
                            <div class="login-card-footer-nav block-media-login my-4">
                                <a href="{{ route('facebook') }}" class="btn btn-block btn-social btn-facebook text-white">
                                    <span class="fa fa-facebook"></span> Continuer avec facebook
                                </a>
                                <a href="{{ route('google') }}" class="btn btn-block btn-social btn-google text-white">
                                    <span class="fa fa-google"></span> Continuer avec google
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  @stop
