<x-layout>

    <!-- Immagine hero homepage -->
    <div class="hero"></div>
    
    <h2 class="text-center text-light mt-5">Gli ultimi articoli pubblicati</h2>

    <!-- Carosello con immagini che ruotano -->
    @if(count($lastArticles)>7)
        <div class="my-2 rotationContainer">
    
            <div class="contain">
            
        
                @for($i=0; $i<8; $i++)
                      
                 <span style="--i: {{$i}}">
                    <a href="#">
            
                        <img src="https://picsum.photos/200/30{{$i}}" class="my-img-rotate" />
                        <div class="image-text">{{$lastArticles[$i]->title}}</div>
                    </a>
            
                    </span>
                @endfor

           
            </div>
        </div>
    @else
        <div class="container text-center text-light my-5 ">
            <p clas="text-center">Stiamo inserendo gli articoli, non farti scappare le offerte </p>
        </div>
        
    @endif  
</x-layout>