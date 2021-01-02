@extends('user.dashboard')

@section('dashboard_title') Reservations @stop

@section('dashbord_content')

<div class="container">
    <!-- Content Row -->
    <div class="row">

        <caption>Liste de reservations</caption>

        <table class="table table-striped">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Depart</th>
                  <th scope="col">Date</th>
                  <th scope="col">Arrivee</th>
                  <th scope="col">Date</th>
                  <th scope="col">Kilos disponible</th>
                  <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td>Otto</td>
                  <td><span class="badge badge-info">en cours...</span></td>
                </tr>
              </tbody>
        </table>

    </div>
</div>

@endsection