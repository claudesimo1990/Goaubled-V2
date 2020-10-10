@extends("layouts.master")

@section('content')

    @include("layouts/includes/header")

    <home-news-component :news="{{ $latest_news }}"></home-news-component>

   
   <how-work></how-work>


   <!-- <profile-component></profile-component> -->

@endsection

