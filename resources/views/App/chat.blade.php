@extends('layouts.master')

@section('content')

<chat
    :post="{{ $post }}" 
    :messages="{{ $messages }}"
    :current-user="{{ auth()->user() }}"
/>
    
@endsection