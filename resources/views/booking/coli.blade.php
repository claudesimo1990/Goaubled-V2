@extends('layouts.master')

@section('content')
    <booking-coli-component 
        :post="{{ $post }}" 
        :owner="{{ $user }}"
        path="{{ route('accueil') }}" 
        :current-user="{{ auth()->user() }}"
    ></booking-coli-component>
@endsection