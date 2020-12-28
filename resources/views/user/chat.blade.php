@extends('user.dashboard')

@section('dashbord_content')

<chat 
    :user="{{ auth()->user() }}" 
    :friends="{{ $contacts }}" 
    asset="{{ asset('storage') }}"
/>

@endsection