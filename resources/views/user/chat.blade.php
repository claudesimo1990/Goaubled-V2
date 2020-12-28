@extends('user.dashboard')

@section('dashbord_content')

<chat 
    :user="{{ auth()->user() }}" :contacts="{{ $contacts }}" asset="{{ asset('storage') }}"
/>

@endsection