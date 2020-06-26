@extends('layouts.master')


@section('content')

    @livewire('travels-reservation',['travel' => $travel, 'user' => $user])

@stop
