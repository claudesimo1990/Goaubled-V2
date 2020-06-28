@extends('layouts.master')


@section('content')

    <travel-booking :user="{{$user}}" :travel="{{$travel}}" :log_user="{{$log_user}}"></travel-booking>

@stop
