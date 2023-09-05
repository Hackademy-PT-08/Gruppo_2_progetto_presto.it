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
    <!-- form per il login -->
    <form action="" method="post">
        <!-- token validazione form -->
        @csrf
        <!-- input di login per email -->
        <input type="email" name="email" id="email" placeholder="mario.rossi@gmail.com">
        <!-- input di login per password -->
        <input type="password" name="password" id="password">

        <!-- input per submit login -->
        <input type="submit" value="Accedi">


    </form>

</x-layout>