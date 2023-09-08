<div>
    
<div class="container py-5">
        <div class="row justify-content-center">
            @if(count($category)>0)
            @foreach($category as $article)
            
            
                <div class="col-4 py-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <h4 class="card-title">{{$article->title}}</h4>
                            <h6 class="card-subtitle mb-2 text-muted">{{$article->category->name}}</h6>
                            <img src="https://picsum.photos/200/200" alt="{{$article->title}}">
                            
                            
                       
                            <p class="card-text">{{$article->body}}</p>
                            <a href="{{route('articles.show', [$article->id])}}" class="card-link">Dettaglio</a>
                            <a href="#" class="card-link">Annuncio di: {{$article->user->name}}</a>
                        </div>
                    </div>
                </div>
            
            @endforeach
            <div class="container py-2">
                {{$category->links()}}
            </div>
            @else
            <p>Non sono presenti articoli nella categoria {{$category->name}} ...</p>
            @endif
        </div>
    </div>
    
</div>
