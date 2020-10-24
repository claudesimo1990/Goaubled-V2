@extends('layouts.master')


@section('content')

    <profile-component 
    :current-user="{{ auth()->user() }}"
    ></profile-component>

@stop
