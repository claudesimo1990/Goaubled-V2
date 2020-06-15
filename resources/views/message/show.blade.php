@extends('layouts.master')

@section('content')
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-md-8 mt-4">
               <h2 class="quigo-title text-center">Reserver vos kilos ici</h2>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-group">
                            <li class="list-group-item bg-secondary text-center text-bold font-weight-bold active">recap de l annonce</li>
                            <li class="list-group-item">Depart : <span class="float-right font-weight-bold">{{ $data[0]->vilDepart }}</span></li>
                            <li class="list-group-item">Arrivee: <span class="float-right font-weight-bold">{{ $data[0]->vilArrive }}</span></li>
                            <li class="list-group-item">Kilos disponibles <span class="float-right font-weight-bold">{{ $data[0]->id }}</span></li>
                            <li class="list-group-item">Prix du kilo <span class="float-right font-weight-bold">{{ $data[0]->kiloAvalable }}</span></li>
                            <button class="btn btn-recherche text-whiteext mt-3">reserver</button>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mt-5">
                <div class="" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            </div>
                            <div class="modal-body">
                                <div class="text-center">
                                    <img
                                        src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R"
                                        name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                                    <h3 class="media-heading">{{$user->name}} </h3>
                                    <span class=""><strong>Nom: </strong>{{$user->name}}</span><br>
                                    <span class=""><strong>email: </strong>{{$user->email}}</span><br>
                                    <span class=""><strong>Membre verifié: </strong>oui</span><br>
                                    <span class=""><strong>depuis: </strong>{{\App\Travel::dateFormat($user->email_verified_at)}}</span><br>
                                    <span class=""><strong>Compte Facebook ?: </strong>oui</span>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <p class="text-left"><strong>Bio: </strong><br>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet
                                        commodo a, vulputate vel tellus.</p>
                                    <br>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="text-center">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough
                                        about Joe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
