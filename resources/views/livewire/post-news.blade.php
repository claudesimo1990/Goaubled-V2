<div>
    <template>
        <section id="about" class="pb-5">
            <div class="container py-4">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="quigo-title">{{$title}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 mt-3 cathergorie">
                        <h3 class="my-4 reveal-2">Affiner votre recherche</h3>
                        <div class="list-group search-box rounded">
                            <div class="col-sm-12">
                                <div class="form-check border-bottom mb-3">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="allnews"
                                           value="all"
                                           wire:model.lazy="all" checked>
                                    <label class="form-check-label" for="allnews">
                                        Toutes les annonces
                                    </label>
                                </div>
                                <div class="form-check border-bottom mb-3">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="Voyages"
                                           value="travel"
                                           wire:model.lazy="travels">
                                    <label class="form-check-label" for="Voyages">
                                        Voyages
                                    </label>
                                </div>
                                <div class="form-check border-bottom mb-3">
                                    <input class="form-check-input" type="radio" name="gridRadios" id="Colis"
                                           wire:model.lazy="colis" value="coli">
                                    <label class="form-check-label" for="Colis">
                                        Colis
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @forelse($allnews as $news)
                            @if($news['categorie_id'] == '2')
                                <div class="container py-3">
                                    <div class="card runde-ecke">
                                        <div class="row shadow">
                                            <div class="col-md-3">
                                                <a href="#" wire:click.prevent="showProfile($news->User_id)">
                                                    <img src="{{asset('/img/avatar.jpg')}}"
                                                         class="testimonial-img rund" alt="">
                                                    <div
                                                        class="font-italic font-weight-bold pl-5 mt-0 pb-2">{{$news['name']}}
                                                    </div>
                                                </a>
                                                <div
                                                    class="notice justify-center text-center notice-success stars">
                                                    <p class="strong">Bewertung</p>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <p class="">Membre verifié <span
                                                            class="fa fa-star verify"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <ul class="timeline">
                                                    <li>
                                                        <a target="_blank" href="#">{{$news['vilDepart']}}</a>
                                                        <a href="#"
                                                           class="float-right pr-4">{{ $news['date_depart'] }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">{{$news['vilArrive']}}</a>
                                                        <a href="#"
                                                           class="float-right pr-4">{{$news['date_arrive']}}</a>
                                                    </li>
                                                </ul>
                                                <hr>
                                                <div class="notice notice-warning">
                                                    <strong>Kilo disponibles:</strong> {{$news['kiloAvalable']}} Kg
                                                    <span
                                                        class="float-right kilo-price">{{$news['prixKilo']}} €</span>
                                                </div>
                                                <div class="notice notice-warning">
                                                    <strong>Message : </strong>
                                                    <p>{{$news['content']}}</p>
                                                </div>
                                                <div class="notice notice-success text-right">
                                                    <button
                                                        wire:click.prevent="contactUser('travel',{{$news['id']}},{{$news['User_id']}})"
                                                        class="btn btn-primary btn-lg btn-recherche">Contactez le
                                                        voyageur
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="container py-3">
                                    <div class="card runde-ecke">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="#" wire:click.prevent="showProfile($news->User_id)">
                                                    <img src="{{asset('/img/avatar.jpg')}}"
                                                         class="testimonial-img rund" alt="">
                                                    <div
                                                        class="font-italic font-weight-bold pl-5 mt-0 pb-2">{{$news['name']}}
                                                    </div>
                                                </a>
                                                <div
                                                    class="notice justify-center text-center notice-success stars">
                                                    <p class="strong">Bewertung</p>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star checked"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <p class="">Membre verifié <span
                                                            class="fa fa-star verify"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <ul class="timeline">
                                                    <li>
                                                        <a target="_blank" href="#">{{$news['vilDepart']}}</a>
                                                        <a href="#"
                                                           class="float-right pr-4">{{ $news['date_depart'] }}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">{{$news['vilArrive']}}</a>
                                                        <a href="#"
                                                           class="float-right pr-4">{{ $news['date_arrive'] }}</a>
                                                    </li>
                                                </ul>
                                                <hr>
                                                <div class="notice notice-warning">
                                                    <strong>Kilo disponibles:</strong> {{$news['kiloAvalable']}} Kg
                                                    <span class="float-right kilo-price">{{$news['prixKilo']}} €</span>
                                                </div>
                                                <div class="notice notice-warning">
                                                    <strong>Message : </strong>
                                                    <p>{{$news['content']}}</p>
                                                </div>
                                                <div class="notice notice-success text-right">
                                                    <button
                                                        wire:click.prevent="contactUser('travel',{{$news['id']}},{{$news['User_id']}})"
                                                        class="btn btn-primary btn-lg btn-recherche">Contactez le
                                                        voyageur
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @empty
                            <h1>hallo les gars</h1>
                        @endforelse
                    </div>
                </div>
            </div>
        </section>
    </template>
</div>
