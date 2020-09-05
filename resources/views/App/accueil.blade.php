@extends("layouts.master")

@section('content')

    @include("layouts/includes/header")

    <home-news-component :news="{{ $latest_news }}" background="{{ '#8bc73d' }}"></home-news-component>

    <how-it-works-component background="{{ '#eee' }}"></how-it-works-component>

@endsection

