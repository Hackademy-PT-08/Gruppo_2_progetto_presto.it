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
   
    <div class="container d-flex justify-content-center mt-5">
        <div class="row">
            <h1 class="text-center py-5 col-12">
                Benvenuto!
                <br>
                Effettua il Login
            </h1>
            <!-- form per il login -->
            <form action="/login" method="post">
                <!-- token validazione form -->
                @csrf
                <div class="row ">

                    <div class="clol-12 d-flex justify-content-around">
                        <!-- input di login per email -->
                        <input class="text-center" type="email" name="email" id="email" placeholder="mario.rossi@gmail.com">
                        <!-- input di login per password -->
                        <input class="text-center" type="password" name="password" id="password" placeholder="password">
                    </div>

                
                </div>
                <div class="col-12 d-flex justify-content-center py-3 pb-5">
                    <!-- input per submit login -->
                    <input type="submit" value="Accedi">

                </div>

                


            </form>
        </div>      
    </div>

</x-layout>