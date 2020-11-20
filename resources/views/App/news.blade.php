@extends("layouts/master")

@section('content')

<news key-watch="{{ $key }}" asset="{{ asset('storage/Colis') }}"></news>

@endsection
