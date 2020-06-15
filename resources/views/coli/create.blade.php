@extends('layouts.master')

@section('content')
    <h2 class="quigo-title text-center mt-5 mb-5">Expediez votre colis</h2>
    <div class="container">
        <div class="mt-5 mb-5">
            @livewire('coli-create-form')
        </div>
    </div>
@endsection
