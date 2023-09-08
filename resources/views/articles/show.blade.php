<x-layout>

<div class="container py-5">
        <div class="row justify-content-center">
            
            
            
            
            <div class="col-4 py-3">
                <div class="card">
                    <div class="card-body text-center">
                        <h4 class="card-title">{{$article->title}}</h4>
                        <h6 class="card-subtitle mb-2 text-muted">{{$article->category->name}}</h6>
                        <img src="https://picsum.photos/200/200" alt="{{$article->title}}">
                            
                            
                       
                        <p class="card-text">{{$article->body}}</p>
                        <a href="#" class="card-link">Annuncio di: {{$article->user->name}}</a>
                        <p class="card-text py-1">Pubblicato il: {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
            </div>
            
            
        </div>
    </div>

</x-layout>