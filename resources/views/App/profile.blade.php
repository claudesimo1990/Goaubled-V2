@extends('layouts.master')


@section('content')

    <dasboard-component :user="{{$user}}"></dasboard-component>

@stop
