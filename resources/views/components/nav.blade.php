<nav class="navbar navbar-expand-lg navbar-light bgColorThree ColorTwo fixed-top shadowcard">
    <div class="container-fluid">


        @Auth
            <div class="d-flex align-items-center d-block d-lg-none">

                <!-- Icone -->

                {{-- <a class="text-reset me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a> --}}

                <!-- Notifiche -->

                {{-- <div class="dropdown">
                    <a data-mdb-dropdown-init class="text-reset me-3 dropdown-toggle hidden-arrow" href="#"
                        id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                         <i class="fas fa-bell"></i> 
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="#">Some news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li>
                    </ul>
                </div> --}}


                <!-- Avatar -->
                <div class="dropdown">
                    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="profile-photo rounded-circle" height="50"
                            alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li class=" pt-3 pb-1 text-center ">
                            <p class="">Ciao, {{ Auth::user()->name }}</p>
                        </li>

                        <li>
                            <a class="dropdown-item" href="">My Profile</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('article.create') }}">Aggiungi Annuncio</a>
                        </li>
                        <li>

                            <a href="{{ route('become.revisor') }}" class="dropdown-item">Lavora con noi</a>



                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">Logout</button>
                            </form>

                        </li>
                    </ul>
                </div>

            </div>
        @endauth

        <!-- Panino -->
        <button data-mdb-collapse-init class="navbar-toggler shadow-none" type="button"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars fs-1 ColorFour"></i>
        </button>

        <!-- Contenuto panino -->
        <div class="collapse navbar-collapse col-4" id="navbarSupportedContent">
            <a class="navbar-brand mt-lg-0" href="">
                <img src="/img/logogiallo2.png" class="" height="50" alt="" loading="lazy" />
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item ">
                    <a class="nav-link ColorTwo fs-5 fw-semibold " href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ColorTwo fs-5 fw-semibold" href="{{ route('article.index') }}">Annunci</a>
                </li>


                @guest
                    <li class="nav-item">
                        <a class="nav-link ColorTwo fs-5 fw-semibold " href="{{ route('register') }}">Registrati</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ColorTwo fs-5 fw-semibold " href="{{ route('login') }}">Accedi</a>
                    </li>
                @endguest

            </ul>

        </div>

        <div class="mx-auto col-4">
            <form action="{{ route('article.search') }}" method="GET" role="search">
                <div class="position-relative input-group rounded d-flex align-items-center">
                    <input name="query" type="search" class="form-control m-0 border-right-0 rounded " placeholder="Scrivi termini di ricerca e premi invio sulla tastiera"
                        aria-label="Search" />

                    <i type="submit" class="fas fa-search position-absolute ColorThree end-0 pe-3"></i>

                </div>
            </form>
        </div>

        @auth
            <div class="d-flex align-items-center d-none d-lg-flex col-4">
                <!-- Icon -->
                {{-- <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
    </a> --}}

                <!-- Notifications -->
                @if (Auth::user()->is_revisor)
                    <div class="dropdown ms-auto">
                        <a data-mdb-dropdown-init class="text-reset me-4 dropdown-toggle hidden-arrow" href="#"
                            id="navbarDropdownMenuLink" role="button" aria-expanded="false">
                            <i class="fas fa-bell fs-4 "></i>
                            <span
                                class="badge rounded-pill badge-notification bg-danger">{{ \App\Models\Article::count() }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">




                            <li>
                                <a class="dropdown-item" href="{{ route('revisor.list') }}">Dashboard Revisor</a>

                            </li>


                            {{-- <li>
                            <a class="dropdown-item" href="#">Another news</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </li> --}}
                        </ul>
                    </div>
                @endif



                <!-- Contenuto Avatar -->
                <div class="dropdown">
                    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                        id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
                        <img src="{{ Auth::user()->profile_photo_url }}" class="profile-photo rounded-circle"
                            height="45px" width="45px" alt="Black and White Portrait of a Man" loading="lazy" />
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
                        <li class=" pt-3 pb-1 text-center ">
                            <p class="">Ciao, {{ Auth::user()->name }}</p>
                        </li>
                        <li>
                            <a class="dropdown-item" href="">My Profile</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('article.create') }}">Aggiungi Annuncio</a>
                        </li>

                        <li>

                            <a href="{{ route('lavoraconnoi') }}" class="dropdown-item">Lavora con noi</a>



                        </li>


                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item text-danger" type="submit">Logout</button>
                            </form>

                        </li>
                    </ul>
                </div>

            </div>
        @endauth
        <div class="col-4"></div>
    </div>
</nav>
