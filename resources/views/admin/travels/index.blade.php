@extends('admin.layout')

@section('admin_title','Posts de Voyages')

@section('admin_content')
     <!-- DataTales Example -->
     <div class="card shadow mb-4">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
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
                @foreach ($travels as $travel)
                <tr>
                    <td class="text-center">{{ $travel->vilDepart }}</td>
                    <td class="text-center">{{ $travel->vilArrive }}</td>
                    <td class="text-center">{{ $travel->getDateDepartAttribute() }}</td>
                    <td class="text-center">{{ $travel->kiloAvalable }}</td>
                    <td class="text-center">{{ $travel->photoBielletAvion }}</td>
                    <td class="text-center">non</td>
                    <td class="text-center">
                        <div class="actions float-lg-right w-auto">
                            <span><button class="btn btn-success">Valider</button></span>
                            <span><button class="btn btn-danger">supprimer</button></span>
                          </div>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
@endsection