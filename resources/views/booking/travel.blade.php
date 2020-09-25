@extends('layouts.master')

@section('content')
    <booking-travel-component :post="{{ $post }}" :owner="{{ $user }}"></booking-travel-component>
@endsection