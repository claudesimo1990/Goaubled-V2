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
                  <th scope="col">Kilos</th>
                  <th scope="col">Date de reservation</th>
                  <th scope="col">Date de confirmation</th>
                  <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($reservations as $index => $item)
                <tr>
                  <th scope="row">{{ $index + 1 }}</th>
                  <td>{{ findPostWithId($item->id)->from }}</td>
                  <td>{{ findPostWithId($item->id)->dateFrom }}</td>
                  <td>{{ findPostWithId($item->id)->kilos }}</td>
                  <td>{{ $item->reservation_date }}</td>
                  <td>{{ $item->reservation_date }}</td>
                  <td>
                    @isset($var)
                      @if ($item->status == "in_progress")
                      <span class="badge badge-info">en cours...</span>
                      @else
                      <span class="badge badge-danger">en cours...</span>
                      @endif
                      @else
                      <span class="badge badge-info">en cours...</span>
                    @endisset
                  </td>
                </tr>    
              @endforeach
              </tbody>
        </table>

    </div>
</div>

@endsection