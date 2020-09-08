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
            <form class="form-signin" wire:submit.prevent="login">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" wire:model="email">
                <label for="inputEmail">Email</label>
                @error('email')<span class="error small">{{ $message }}</span>@enderror
              </div>
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" wire:model="password">
                <label for="inputPassword">Password</label>
                @error('password')<span class="error small">{{ $message }}</span>@enderror
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">se connecter</button>
              <a class="d-block text-center mt-2" href="{{ route('register') }}">S'inscrire</a>
              <hr class="my-4">
              <a class="btn btn-lg btn-google btn-block text-uppercase" href="{{route('google')}}"><i class="fab fa-google mr-2"></i>S'inscrire avec Google</a>
              <a class="btn btn-lg btn-facebook btn-block text-uppercase" href="{{ route('facebook') }}"><i class="fab fa-facebook-f mr-2"></i>S'inscrire avec Facebook</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
