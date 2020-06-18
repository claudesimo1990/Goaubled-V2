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
                        <div class="list-group">
                            <a href="" wire:click.prevent="$emit('newsFilterEvent','travel')" class="list-group-item">Voyages</a>
                            <a href="" wire:click.prevent="sortNews('pack')" class="list-group-item">Colis</a>
                            <a href="" wire:click.prevent="showAllNews('liste d annonces')" class="list-group-item">toutes
                                les annonces</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @foreach($news as $item)
                            @if($item['categorie_id'] == '2')
                                <div class="container py-3">
                                    <div class="card runde-ecke">
                                        <div class="row shadow">
                                            <div class="col-md-3">
                                                <a href="#" wire:click.prevent="showProfile($news->User_id)">
                                                    <img src="{{asset('/img/avatar.jpg')}}"
                                                         class="testimonial-img rund" alt="">
                                                    <div
                                                        class="font-italic font-weight-bold pl-5 mt-0 pb-2">{{$item['name']}}
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
                                                        <a target="_blank" href="#">{{$item['vilDepart']}}</a>
                                                        <a href="#"
                                                           class="float-right pr-4">{{\App\Travel::dateFormat($item['dateDepart'])}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">{{$item['vilArrive']}}</a>
                                                        <a href="#"
                                                           class="float-right pr-4">{{\App\Travel::dateFormat($item['dateArrive'])}}</a>
                                                    </li>
                                                </ul>
                                                <hr>
                                                <div class="notice notice-warning">
                                                    <strong>Kilo disponibles:</strong> {{$item['kiloAvalable']}} Kg
                                                    <span class="float-right kilo-price">{{$item['prixKilo']}} €</span>
                                                </div>
                                                <div class="notice notice-warning">
                                                    <strong>Message : </strong>
                                                    <p>{{$item['content']}}</p>
                                                </div>
                                                <div class="notice notice-success text-right">
                                                    <button
                                                        wire:click.prevent="contactUser('travel',{{$item['id']}},{{$item['User_id']}})"
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
                                        <div class="row shadow">
                                            <div class="col-md-3">
                                                <a href="#" wire:click.prevent="showProfile($news->User_id)">
                                                    <img src="{{asset('/img/pack.jpeg')}}"
                                                         class="testimonial-img rund" alt="">
                                                    <div
                                                        class="font-italic font-weight-bold pl-5 mt-0 pb-2">{{$item['name']}}
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-md-9">
                                                <ul class="timeline">
                                                    <li>
                                                        <a target="_blank" href="#">{{$item['vilDepart']}}</a>
                                                        <a href="#"
                                                           class="float-right pr-4">{{\App\Travel::dateFormat($item['dateDepart'])}}</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">{{$item['vilArrive']}}</a>
                                                        <a href="#"
                                                           class="float-right pr-4">{{\App\Travel::dateFormat($item['dateArrive'])}}</a>
                                                    </li>
                                                </ul>
                                                <hr>
                                                <div class="notice notice-warning">
                                                    <strong>Poids du Packet :</strong> {{ '30' }} Kg
                                                    <span class="float-right kilo-price">{{ '10' }}€ </span>
                                                </div>
                                                <div class="notice notice-warning">
                                                    <strong>Message : </strong>
                                                    <p>{{$item['content']}}</p>
                                                </div>
                                                <div class="notice notice-success text-right">
                                                    <button
                                                        wire:click="contactUser('coli',{{$item['id']}},{{$item['User_id']}})"
                                                        class="btn btn-primary btn-lg btn-recherche">Contactez
                                                        l'expediteur
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </template>
</div>
