<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="{{route('accueil')}}" class="scrollto">Go<span>AuBled</span></a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                @guest
                    <li class="{{ (request()->is('/')) ? 'menu-active' : '' }}"><a href="{{route('accueil')}}"><i class='fas fa-home mr-1'></i>Accueil</a></li>
                    <li class="{{ (request()->is('news')) ? 'menu-active' : '' }}"><a href="{{route('news.index')}}"><i class="fas fa-search mr-1"></i>Voir les annonces</a></li>
                    <li class="{{ (request()->is('travel')) ? 'menu-active' : '' }}"><a href="{{route('travels.create')}}"><i class="fas fa-road mr-1"></i>Proposer un trajet</a></li>
                    <li class="{{ (request()->is('coli')) ? 'menu-active' : '' }}"><a href="{{route('packs.create')}}"><i class="fas fa-people-carry mr-1"></i>Expedier un colis</a></li>
                    <li class="{{ (request()->is('register')) ? 'menu-active' : '' }}"><a href="{{route('register')}}"><i class='fas fa-sign-in-alt mr-1'></i>Inscription</a></li>
                    <li class="{{ (request()->is('login')) ? 'menu-active' : '' }}"><a href="{{route('login')}}"><i class='fas fa-sign-in-alt mr-1'></i>Connexion</a></li>
                @else
                <li class="{{ (request()->is('/')) ? 'menu-active' : '' }}"><a href="{{route('accueil')}}"><i class='fas fa-home mr-1'></i>Accueil</a></li>
                <li class="{{ (request()->is('news')) ? 'menu-active' : '' }}"><a href="{{route('news.index')}}"><i class="fas fa-search mr-1"></i>Voir les annonces</a></li>
                <li class="{{ (request()->is('travel')) ? 'menu-active' : '' }}"><a href="{{route('travels.create')}}"><i class="fas fa-road mr-1"></i>Proposer un trajet</a></li>
                <li class="{{ (request()->is('coli')) ? 'menu-active' : '' }}"><a href="{{route('packs.create')}}"><i class="fas fa-people-carry mr-1"></i>Expedier un colis</a></li>

                    <li class="ml-3 user__bild"><img src="{{Auth::user()->avatar ? asset(Auth::user()->avatar) :  asset('/img/logo.png') }}" class="user__bild"></li>
                    <li class="nav-item dropdown {{ (request()->is('home')) ? 'menu-active' : '' }}">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}"
                               href="{{ route('profile.show',['user' =>Auth::id() ]) }}"> Profile <i class="fa fa-wrench float-right" aria-hidden="true"></i>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}"
                               href="{{ url('/profile/'.Auth::user()->name) }}"> Notifications<i class="float-right fa fa-bell" aria-hidden="true"></i>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}"
                               href="{{ route('messages.index') }}">Messages<i class="float-right fa fa-envelope" aria-hidden="true"></i></a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class='fas fa-logout-alt mr-1'></i>Deconnexion</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </nav>
    </div>
</header>
