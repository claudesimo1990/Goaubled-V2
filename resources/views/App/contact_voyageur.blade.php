@extends('layouts.master')


@section('content')
    @livewire('contact-page', ['user' => $user])

@stop
