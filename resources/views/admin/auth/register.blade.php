@extends('admin.auth.layouts')

@section('content')

@section('titel', 'Admin Register')

<form action="{{ route('admin.register') }}" method="POST">
    @csrf
    <div class="form-group">
      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nom">
      @error('name')<span class="text-red small">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
      <input type="text" name="email" class="form-control" id="exampleInputPassword1" placeholder="email">
      @error('name')<span class="text-red small">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="mot de passe">
        @error('name')<span class="text-red small">{{ $message }}</span>@enderror
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary float-left">Register</button>
    </div>
  </form>
    
@endsection