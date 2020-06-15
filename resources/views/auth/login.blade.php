@extends('layouts.master')

@section('content')
    <h2 class="quigo-title text-center mt-5 mb-5">login</h2>
    <div class="container">
        <div class="form-heard" style="background-color: #f7f1e3;color:#8bc73d ">
            <div class="social-btn text-center mt-4 mb-4">
                <a href="{{route('facebook')}}" class="btn btn-primary btn-lg"><i class="fab fa-facebook"></i>Facebook</a>
                <a href="{{route('redirect')}}" class="btn btn-danger btn-lg"><i class="fab fa-google"></i>Google</a>
            </div>
        </div>
        <div class="mt-5 mb-5">
            @livewire('login-form')
        </div>
    </div>
@endsection
