@extends('layouts.master')

@section('content')
    <booking-travel-component 
        :post="{{ $post }}" 
        :owner="{{ $user }}" 
        :current-user="{{ auth()->user() }}"
    />
@endsection