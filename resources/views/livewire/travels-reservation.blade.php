<div>
    <section id="about" class="mb-5 reservation-component">
        <h1 class="text-justify text-center headline-text">Reserver un Voyage </h1>

        <div class="container shadow">
            <div class="row">
                <div class="col-lg-3 col-sm-12 justify-content-center">
                    <div class="">
                        <img class="avatar"
                             src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStl-KWsV0KVxQug2HoR6e3lx6UUSD4KAqyDbevILtDVDvs0YK1xA&s">
                    </div>
                    <div class="user-infos">
                        <strong>Name:</strong> <span>{{$user->name}}</span><br>
                        <strong>Email:</strong> <span>{{$user->email}}</span>
                    </div>
                    <hr class="hr-sepace">
                    <span>
					 @if($user->email_verified_at != null)
                            <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
                              d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd"
                              d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
					</svg>
                        @else
                            <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg" style="color: red">
						<path fill-rule="evenodd"
                              d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd"
                              d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
					</svg>
                        @endif
					Numéro vérifier
				</span><br>

                    <span>
                        @if($user->email_verified_at != null)
                            <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd"
                              d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd"
                              d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
					</svg>
                        @else
                            <svg class="bi bi-check2-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor"
                                 xmlns="http://www.w3.org/2000/svg" style="color: red">
						<path fill-rule="evenodd"
                              d="M15.354 2.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L8 9.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
						<path fill-rule="evenodd"
                              d="M8 2.5A5.5 5.5 0 1 0 13.5 8a.5.5 0 0 1 1 0 6.5 6.5 0 1 1-3.25-5.63.5.5 0 1 1-.5.865A5.472 5.472 0 0 0 8 2.5z"/>
					</svg>
                        @endif
					E-Mail vérifier
				</span><br>
                        <div class="starrr" data-rating="0"></div>
                    <div>

                        <div class="rating"><input type="radio" name="rating" value="5" id="5"><label for="5">☆</label>
                            <input type="radio" name="rating" value="4" id="4"><label for="4">☆</label> <input
                                type="radio" name="rating" value="3" id="3"><label for="3">☆</label> <input type="radio"name="rating"value="2"id="2"><label
                                for="2">☆</label> <input type="radio" name="rating" value="1" id="1"><label
                                for="1">☆</label>
                        </div>
                    </div>

                </div>
                <div class="col-lg-9  col-sm-12 travel-detail">
                    <h3> Details du trajet</h3>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="timeline offset-md-3">
                                <span class="step-heure">{{$travel->date_depart}}</span>
                                <li>
                                    <p>{{$travel->vilDepart}}</p>
                                </li>

                                <span class="step-heure">{{$travel->date_arrive}}</span>
                                <li>
                                    <p>{{$travel->vilArrive}}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 border">
                            <p>Kilos Disponibles : <span class="text-white font-weight-bold">{{$allKilos}}</span></p>
                            <p>Prix du Kilo : <span class="text-white font-weight-bold">{{$travel->prixKilo}}</span></p>
                            <p>Compagnie : <span class="text-white font-weight-bold">{{$travel->compagnie}}</span></p>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 reservation-form">
                            <button class="btn btn-reserve" type="submit">je reserve</button>
                            <button class="btn btn-contact-reserve" data-toggle="collapse" data-target="#reserver"
                                    class="btn btn-primary">contacter le voyageur
                            </button>
                            <div id="reserver" class="collapse">
                                <div class="form-group">
                                    <label for="email">Votre message:  {{$message}}</label>
                                    <textarea type="textarea" class="form-control voyageur-textarea" id="message"
                                              name="message" wire:model.lazy="message"></textarea>
                                    <button class="btn btn-primary" type="submit">envoyer</button>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

