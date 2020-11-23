@extends('layouts.master')

@section('content')
    <booking-coli-component :post="{{ $post }}" :owner="{{ $user }}"></booking-coli-component>
@endsection