<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="{{route('accueil')}}" class="scrollto">Go<span>AuBled</span></a></h1>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                @guest
                    <li class="{{ (request()->is('/')) ? 'menu-active' : '' }}"><a href="{{route('accueil')}}"><span class="fa fa-home mr-1"></span>Accueil</a></li>
                    <li class="{{ (request()->is('news')) ? 'menu-active' : '' }}"><a href="{{route('news.index')}}"><span class="fa fa-search mr-1"></span>Voir les annonces</a></li>
                    <li class="{{ (request()->is('travel')) ? 'menu-active' : '' }}"><a href="{{route('travels.create')}}"><span class="fa fa-road mr-1"></span>Proposer un trajet</a></li>
                    <li class="{{ (request()->is('coli')) ? 'menu-active' : '' }}"><a href="{{route('packs.create')}}"><span class="fa fa-bank mr-1"></span>Expedier un colis</a></li>
                    <li class="{{ (request()->is('register')) ? 'menu-active' : '' }}"><a href="{{route('register')}}"><span class='fa fa-sign-language mr-1'></span>Inscription</a></li>
                    <li class="{{ (request()->is('login')) ? 'menu-active' : '' }}"><a href="{{route('login')}}"><span class='fa fa-sign-in mr-1'></span>Connexion</a></li>
                @else
                <li class="{{ (request()->is('/')) ? 'menu-active' : '' }}"><a href="{{route('accueil')}}"><i class='fas fa-home mr-1'></i>Accueil</a></li>
                <li class="{{ (request()->is('news')) ? 'menu-active' : '' }}"><a href="{{route('news.index')}}"><i class="fas fa-search mr-1"></i>Voir les annonces</a></li>
                <li class="{{ (request()->is('travel')) ? 'menu-active' : '' }}"><a href="{{route('travels.create')}}"><i class="fas fa-road mr-1"></i>Proposer un trajet</a></li>
                <li class="{{ (request()->is('coli')) ? 'menu-active' : '' }}"><a href="{{route('packs.create')}}"><i class="fas fa-people-carry mr-1"></i>Expedier un colis</a></li>
                @if (Auth::user()->avatar_original)
                <li class="ml-3 user__bild"><img src="{{Auth::user()->avatar_original}}" class="user__bild"></li>
                @else
                <li class="ml-3 user__bild"><img src="{{Auth::user()->avatar ? asset('storage/UsersAvatars/'.Auth::user()->avatar) :  asset('/img/logo.png') }}" class="user__bild"></li>
                @endif
                <li class="nav-item dropdown {{ (request()->is('home')) ? 'menu-active' : '' }}">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ substr(Auth::user()->name,0,20). '...' }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}"
                               href="{{ route('user.profile',Auth()->id()) }}"> Profile <i class="fa fa-wrench float-right" aria-hidden="true"></i>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}"
                               href="{{ route('user.notifications',Auth()->id()) }}"> Notifications<span class="badge badge-info p-1 float-right">{{ auth()->user()->unreadNotifications->count() }}</span>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}"
                               href="{{ route('user.message',Auth()->id()) }}">Chat<i class="fas fa-fw fa-comments float-right" aria-hidden="true"></i>
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}"
                               href="{{ route('user.factures',Auth()->id()) }}"> Factures <i class="fas fa-fw fa-envelope float-right" aria-hidden="true"></i>
                            </a>

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
