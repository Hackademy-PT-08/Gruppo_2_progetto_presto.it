<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
      <div class="align-items-lg-end container-fluid">
        <a class="navbar-brand ms-3" href="/">Trovalo.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav w-100 mb-2 mb-lg-0">
          <!-- MENU CATEGORIE e BARRA DI RICERCA -->  
          <div class="input-group mb-3 justify-content-center">
            <li class="nav-item dropdown">
              <button id="categoriesButton" class="btn btn-outline-secondary dropdown-toggle" style="background-color: rgb(204, 204, 204); font-weight:bolder" type="button" data-bs-toggle="dropdown" aria-expanded="false">Categorie</button>   
              <ul id="dropdownMenu" class="dropdown-menu"> 
                @foreach($categories as $category)
                <li><a class="dropdown-item" href="{{route('categories.show', [ str_replace( ' ', '-', strtolower($category->name) )])}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
              <form class="d-flex nav-item" role="search">
              <input id="searchInput" class="form-control me-2" type="search" placeholder="Ricerca Trovalo.it" aria-label="Search">
              <button class="btn text-black btn-warning me-2" type="submit">Cerca</button>
              </form> 
          </div>
            
            <!-- AGGIUNGI ARTICOLO -->
            @if(auth()->check())
              <li class="nav-item me-2">
                <a class="nav-link active" aria-current="page" href="{{route('articles.create')}}">Aggiungi Annuncio</a>
              </li>
            @endif
            
            <!-- LINK LOGIN REISTRATI E LOGOUT -->
            @if(auth()->check())
           <!-- MENU PROFILO -->
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa-regular fa-circle-user fs-2"></i>
              </a>
              
              <ul id="dropdownMenu" class="dropdown-menu">
               
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">
                  <form action="/logout" method="post">
                      @csrf
                    <input type="submit" value="logout">

                  </form></a>
              </li>
              
                
              </ul>
            </li>
             
              
            @else
            <li class="nav-item">
              <a class="nav-link" href="/login">Login</a>
            </li>
            <li class="nav-item me-3">
              <a class="nav-link" href="/register">Registrati</a>
            </li>
            @endif
          </ul>
         
        </div>
      </div>
    </nav>