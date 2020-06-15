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
                           class="float-right pr-4">{{\App\Travel::dateFormat($news['dateDepart'])}}</a>
                    </li>
                    <li>
                        <a href="#">{{$news['vilArrive']}}</a>
                        <a href="#" class="float-right pr-4">{{\App\Travel::dateFormat($news['dateArrive'])}}</a>
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
                    <button  wire:click.prevent="contactUser('travel',{{$news['id']}},{{$news['User_id']}})"
                       class="btn btn-primary btn-lg btn-recherche">Contactez le
                        voyageur</button>
                </div>
            </div>
        </div>
    </div>
</div>