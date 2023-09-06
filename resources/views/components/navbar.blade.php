<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            @if(auth()->check())
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <form action="/logout" method="post">
                      @csrf
                      <input type="submit" value="logout">

                  </form></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('articles.create')}}">Aggiungi Annuncio</a>
              </li>
            @else
            <li class="nav-item">
              <a class="nav-link" href="{{route('auth.login')}}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('auth.register')}}">Registrati</a>
            </li>
            @endif
         <!--   <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorie
              </a>
               <ul id="dropdownMenu" class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
              </ul>
            </li> -->
            <li class="nav-item">
              <a class="nav-link disabled"></a>
            </li>
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
            <button class="btn text-black btn-outline-warning" type="submit">Cerca</button>
          </form>
        </div>
      </div>
    </nav>