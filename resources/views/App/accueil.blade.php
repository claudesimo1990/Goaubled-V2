@extends("layouts.master")

@section('content')

    @include("layouts/includes/header")

    <home-news-component :news="{{ $latest_news }}"></home-news-component>

    <about></about>

    <how-work></how-work>

    <destinations></destinations>

@endsection

