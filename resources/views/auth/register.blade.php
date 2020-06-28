@extends('layouts.master')

@section('content')
    <h2 class="quigo-title text-center mt-5 mb-5">Enregistrer vous </h2>
    <div class="container">
        <div class="mt-5 mb-5">
            @livewire('register-form')
        </div>
    </div>
@endsection
