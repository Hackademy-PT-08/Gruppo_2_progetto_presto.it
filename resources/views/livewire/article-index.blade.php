<div>
    <div class="container py-5">
        <div class="row">
            
            @foreach($articles as $article)
            
            
                <div class="col-4 py-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$article->title}}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">{{$article->category->name}}</h6>
                            <img src="https://picsum.photos/200/200" alt="{{$article->title}}">
                            
                            
                       
                            <p class="card-text">{{$article->body}}</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Annuncio di: {{$article->user->name}}</a>
                        </div>
                    </div>
                </div>
            
            @endforeach
        </div>
    </div>
   {{$articles->links()}}
</div>
