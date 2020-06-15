{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Utilisateurs</h1>
@stop

@section('content')
    <table class="table table-bordered bg-white">
        <thead>
        <tr>
            <th class="text-center">nom</th>
            <th class="text-center">Email</th>
            <th class="text-center">Date d'incription</th>
            <th class="text-center">confirmer ?</th>
        </tr>
        </thead>
        <tbody>
        @forelse($users as $user)
            <tr>
                <td class="text-center">{{$user->name}}</td>
                <td class="text-center">{{$user->email}}</td>
                <td class="text-center">{{$user->created_at}}</td>
                <td class="text-center">{{$user->email_verified_at ? 'oui':'non'}}</td>
                <td class="text-right">
                    <span href="" class="btn btn-success">update</span>
                    <span class="btn btn-danger">delete</span>
                    <span class="btn btn-warning">speren</span>
                </td>
            </tr>
        @empty
            <p class="bg-red">tabelle empty</p>
        @endforelse
        </tbody>
    </table>
    <div class="paginate text-center pb-5">
        {!! $users->render() !!}
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
