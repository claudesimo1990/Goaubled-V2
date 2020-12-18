@extends('admin.layout')

@section('admin_content')

  <div class="col-md-12">
    @if (session()->has('message'))
        <div class="alert alert-success">
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
          <h6 class="m-0 font-weight-bold text-primary text-uppercase">Voyages</h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="text-center">N°</th>
                  <th class="text-center">Depart</th>
                  <th class="text-center">Arrivee</th>
                  <th class="text-center">Depart le</th>
                  <th class="text-center">Nombre de Kilos</th>
                  <th class="text-center">Biellet d avion</th>
                  <th class="text-center">valider?</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($travels as $index => $travel)
                    <tr>
                      <td class="text-center">{{ $travel->id }}</td>
                      <td class="text-center">{{ $travel->from }}</td>
                      <td class="text-center">{{ $travel->to }}</td>
                      <td class="text-center">{{ $travel->getDateToAttribute() }}</td>
                      <td class="text-center">{{ $travel->kilo }}</td>
                      <td class="text-center">{{ $travel->photoBielletAvion }}</td>
                      <td class="text-center">{{ $travel->publish == 0 ? 'non':'oui' }}</td>
                      <td class="text-center">
                        <a href="{{ route('admin.travel.validate',$travel->id) }}" class="btn btn-success">valider</a>
                        <a href="{{ route('admin.travel.reject',$travel->id) }}" class="btn btn-danger">retirer  </a>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>
            {{ $travels->links() }}
          </div>
        </div>
      </div>

    </div>

@endsection