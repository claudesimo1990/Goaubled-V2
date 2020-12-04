@extends('layouts.master')


@section('content')

<h1>salut</h1>

    <profile-component 
    :current-user="{{ auth()->user() }}"
    ></profile-component>

@stop
