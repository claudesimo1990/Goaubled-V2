@extends('admin.layout')

@section('admin_content')

<div class="col-md-12">
  @if (session()->has('message'))
      <div class="alert alert-danger">
          {{ session('message') }}
      </div>
  @endif
  @if (session()->has('error'))
      <div class="alert alert-danger">
          {{ session('error') }}
      </div>
  @endif
  </div>

<div class="container-fluid">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-uppercase">Users</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-center">Name</th>
                <th class="text-center">email</th>
                <th class="text-center">verifier</th>
                <th class="text-center">Membre depuis</th>
                <th class="text-center">Posts</th>
                <th class="text-center">actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <td class="text-center">{{ $item->name }}</td>
                    <td class="text-center">{{ $item->email }}</td>
                    <td class="text-center">{{ $item->email_verified_at ? 'OUI' : 'NON' }}</td>
                    <td class="text-center">{{ $item->created_at }}</td>
                    <td class="text-center">{{ $item->posts()->count() }}</td>
                    <td class="text-center">
                        <button class="btn btn-info">edit</button>
                        <button class="btn btn-danger">delete</button>
                        <button class="btn btn-info">details</button>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          {{ $users->links() }}
        </div>
      </div>
    </div>

  </div>

@endsection