<x-layout>

    <!-- Immagine hero homepage -->
    <div class="hero">
    <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center mt-4 pt-5">
               <h1><strong>
                  Trovalo.it i migliori affari <br>nella tua città!</h1> </strong>               
                    </div>
                  </div>
              </div>
            </div>
           <div class="row miarow">
            <div class="col-12 m2-2 ">
    </div>

    <!-- Testo carosello presente
    <div class="content">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center mt-4 pt-5">
        <h2 class="text-center text-light mt-5">Gli ultimi articoli pubblicati</h2>
    </div> -->

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