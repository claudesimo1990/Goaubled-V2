@extends('layouts.master')

@section('content')
    <h2 class="quigo-title text-center mt-3 mb-3">Publiez votre Voyage</h2>
   <div class="container">
       <div class="mt-5 mb-5">
           @livewire('travel-create-form')
       </div>
   </div>
@endsection
