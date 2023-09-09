<x-layout>
    <!-- gestione degli errori backend -->
    @if ($errors->any())  
        @foreach ($errors->all() as $error)  
         {{$error}} 
        @endforeach
    @endif
    <!-- messaggio di stato dopo aver fatto ripristino password -->
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif
   
    <div class="container mt-4 py-5">
        <div class="card">
            <div class="card-body py-5">
                <div class="py-1 mt-2">
                    <div class=" d-flex align-items-center justify-content-center row form__padding">
                        <img src="https://i.pinimg.com/originals/8b/44/51/8b4451665d6b2139e29f29b51ffb1829.png" style="width: 320px" alt="Lo Image" class=" form__image img-fluid">
                    </div>
                    <!-- form per il login -->
                    <form class="row justify-content-center align-items-center" action="/login" method="post">
                        <!-- token validazione form -->
                        @csrf
                        <!-- titolo del form -->
                        <h5 class="card-title text-center mt-3">Benvenuto! <br> Effettua il login </h5>

                        <!-- input di login per email -->
                        <input class="text-center col-9 col-lg-7 py-1 my-2" type="email" name="email" id="email" placeholder="mario.rossi@gmail.com">
                        <!-- input di login per password -->
                        <input class="text-center col-9 col-lg-7 py-1 my-2" type="password" name="password" id="password" placeholder="password">
                        <!-- input per submit login -->
                        <input class="btn col-9 col-lg-7 py-1 my-2 btn-warning text-dark" type="submit" value="Accedi">
                        <div class="col-9 d-flex justify-content-around py-1 my-2">
                                                        
                            
                            <a class="form__link" href="{{route('auth.forgot-password')}}">Password dimenticata?</a>
                            </p>
                            <p> <a class="form__link" href="#">Crea il tuo account!</a></p>
                        </div>
                        
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</x-layout>