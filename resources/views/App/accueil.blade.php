@extends("layouts.master")

@section('content')

    @include("layouts/includes/header")
    <section id="services" style="background-color:#f8f8f8" class="mb-5">
        <div class="container">
            <div class="section-header">
                <h2>Les dernieres annonces</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                    enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                    velit export irure minim illum fore</p>
            </div>

            <div class="row">
                @forelse($latest_news as $news)
                    <div class="col-lg-6">
                        <div class="box wow fadeInLeft">
                            <div class="icon"><i class="fa fa-user-circle"></i></div>
                            <h4 class="title"><a href="">{{$news->vilDepart}} &#8658; {{$news->vilArrive}}</a></h4>
                            <p class="description">
                                {{Str::limit(Str::title($news->content), 50)}}
                            </p>
                            <button class="btn  btn-link mt-1 mb-2 float-right">contacter le voyageur</button>
                        </div>
                    </div>
                @empty
                    <h1>empty</h1>

                @endforelse

            </div>

        </div>
    </section>
    <section id="about" class="reveal-1 mb-5">
        <div class="container">
            <div class="row">
                <div class="section-header">
                    <h2>Comment Ca marche ?</h2>
                    <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet
                        veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute
                        nulla ipsum velit export irure minim illum fore</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
              <i class="fa fa-search" aria-hidden="true"></i>
          </span>
                    <h4 class="service-heading quigo-subtitle">Rechercher un voyage</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
                <i class="fas fa-sign-in-alt"></i>
          </span>
                    <h4 class="service-heading quigo-subtitle">S authentifier</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
          </span>
                    <h4 class="service-heading">Contacter le Voyageur</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam
                        architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
      Clients Section
    ============================-->
    <section id="clients" class="wow fadeInUp mb-5">
        <div class="container">
            <div class="section-header">
                <h2>Nos Partenaires</h2>
                <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam
                    enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum
                    velit export irure minim illum fore</p>
            </div>

            <div class="owl-carousel clients-carousel">
                <img src="img/clients/client-1.png" alt="">
                <img src="img/clients/client-2.png" alt="">
                <img src="img/clients/client-3.png" alt="">
                <img src="img/clients/client-4.png" alt="">
                <img src="img/clients/client-5.png" alt="">
                <img src="img/clients/client-6.png" alt="">
                <img src="img/clients/client-7.png" alt="">
                <img src="img/clients/client-8.png" alt="">
            </div>

        </div>
    </section><!-- #clients -->
@endsection

