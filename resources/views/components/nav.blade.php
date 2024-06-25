<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bgColorThree ColorTwo fixed-top shadowcard">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img src="/img/logogiallo2.png" class="" height="50" alt="" loading="lazy" />
        </a>
        
        @Auth
        <div class="d-flex align-items-center d-block d-lg-none">
            <!-- Icon -->
            <a class="text-reset me-3" href="#">
                <i class="fas fa-shopping-cart"></i>
            </a>
            
            <!-- Notifications -->
            <div class="dropdown">
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
        </div>
        <!-- Avatar -->
        <div class="dropdown">
            <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
            id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
            <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
            alt="Black and White Portrait of a Man" loading="lazy" />
        </a>
        <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuAvatar"
      >
        <li class=" pt-3 pb-1 text-center ">
          <p class="" >Ciao, {{Auth::user()->name}}</p>
        </li>
     
        <li>
          <a class="dropdown-item" href="">My Profile</a>
        </li>
       
        <li>
          <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="dropdown-item text-danger" type="submit">Logout</button>
          </form>
         
        </li>
      </ul>
    </div>
    
</div>
@endauth

<!-- Toggle button -->
<button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarSupportedContent"
aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<i class="fas fa-bars"></i>
</button>

<!-- Collapsible wrapper -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!-- Navbar brand -->
    
    <!-- Left links -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item ">
            <a class="nav-link ColorTwo fs-5 fw-semibold " href="{{ route('home') }}">HOME</a>
        </li>
        <li class="nav-item">
            <a class="nav-link ColorTwo fs-5 fw-semibold" href="{{ route('article.index') }}">Index</a>
        </li>
        
        @guest
        
        
        
        
        
        
        
        
        <li class="nav-item">
            <a class="nav-link ColorTwo fs-5 fw-semibold " href="{{ route('register') }}">Registrati</a>
        </li>
        
        
        <li class="nav-item">
            <a class="nav-link ColorTwo fs-5 fw-semibold " href="{{ route('login') }}">Accedi</a>
        </li>
        @else
    </ul>
    <!-- Left links -->
</div>
<!-- Collapsible wrapper -->

<!-- Right elements -->
<div class="d-flex align-items-center d-none d-lg-flex">
    <!-- Icon -->
    <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
    </a>
    
    <!-- Notifications -->
    <div class="dropdown">
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
</div>
<!-- Avatar -->
<div class="dropdown">
    <a data-mdb-dropdown-init class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
    id="navbarDropdownMenuAvatar" role="button" aria-expanded="false">
    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="25"
    alt="Black and White Portrait of a Man" loading="lazy" />
</a>
<ul
            class="dropdown-menu dropdown-menu-end"
            aria-labelledby="navbarDropdownMenuAvatar"
          >
            <li class=" pt-3 pb-1 text-center ">
              <p class=""" >Ciao, {{Auth::user()->name}}</p>
            </li>
            <li>
              <a class="dropdown-item" href="">My Profile</a>
            </li>
           
            <li>
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button class="dropdown-item text-danger" type="submit">Logout</button>
              </form>
             
            </li>
          </ul>
</div>
@endguest
</div>

</div>
</nav>
