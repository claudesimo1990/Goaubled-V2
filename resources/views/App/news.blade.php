@extends("layouts/master")

@section('content')
    <news :news="{{ $posts }}"></news>
@endsection
