<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand logo" href="/">LiveScore.Foot</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto text-uppercase">
            <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a class="nav-link" href="/">Accueil <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ request()->is('competitions') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('competitions.index') }}">Competitions</a>
            </li>
            {{-- <li class="nav-item {{ request()->is('matchs') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('matchs.next') }}">Matchs a venir</a>
            </li>
            <li class="nav-item {{ request()->is('matchs/last') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('matchs.last') }}">Resultats d'hier</a>
            </li> --}}
            <li class="nav-item {{ request()->is('matchs/last') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('matchs.last') }}">Recherche</a>
            </li>
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
            @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Espace membre
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/login">
                            <i class="bi bi-box-arrow-in-left" style="font-size: 1.5rem;"></i>
                            Se connecter
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="/register">
                            <i class="bi bi-door-open" style="font-size: 1.5rem;"></i>
                            S'inscrire
                        </a>
                    </div>
                </li>
            @endguest
            @auth
                <li class="nav-item dropdown {{ request()->is('profil') ? 'active' : '' }}">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->username }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/profil">
                            <i class="bi bi-person" style="font-size: 1.5rem;"></i>
                            Mon profil
                        </a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="/logout">
                            <i class="bi bi-box-arrow-in-right" style="font-size: 1.5rem;"></i>
                            Se déconnecter
                        </a>
                    </div>
                </li>
            @endauth
        </ul>
    </div>
</nav>
