@extends('layouts.master')

@section('content')
    <h2 class="quigo-title text-center mt-5 mb-5">login</h2>
    <div class="container mb-5">
        <div class="mt-5 mb-5 p-5">
            @livewire('login-form')
        </div>
    </div>
@endsection
