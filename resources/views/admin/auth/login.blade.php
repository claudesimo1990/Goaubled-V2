@extends('admin.auth.layouts')

@section('content')
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
@section('titel', 'Admin Login')

<form action="{{ route('admin.login') }}" method="POST">
    @csrf
    <div class="form-group">
      <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
      @error('email')<span class="text-red small">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="mot de passe">
        @error('password')<span class="text-red small">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary float-left">login</button>
    </div>
  </form>
    
@endsection