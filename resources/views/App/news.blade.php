@extends("layouts/master")

@section('content')

<news key-watch="{{ $key }}" asset="{{ asset('storage/colis') }}"></news>

@endsection
