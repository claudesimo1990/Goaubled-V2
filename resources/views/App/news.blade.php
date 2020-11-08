@extends("layouts/master")

@section('content')

<news :key-watch="{{ $key ? $key : "allNews"  }}"></news>

@endsection
