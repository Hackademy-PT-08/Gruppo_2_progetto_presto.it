<x-layout>
    
    @if ($errors->any()) 
        @foreach ($errors->all() as $error) 
            {{$error}}  
        @endforeach 
    @endif

    <!-- form di registrazione -->
    <form action="/register" method="post">
        <!-- token per validazione del form -->
        @csrf
        <!-- input per il nome -->
        <input type="text" name="name" id="name" placeholder="Nome">
        <!-- input per il cognomenome -->
        <input type="text" name="surname" id="surname" placeholder="Cognome">
        <!-- input per l'email -->
        <input type="email" name="email" id="email" placeholder="mario.rossi@gmail.com">
        <!-- input per la password -->
        <input type="password" name="password" id="password" placeholder="inserisci una password">
        <!-- input per la conferma password -->
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="conferma password">
        <!-- input per la data di nascita -->
        <input type="date" name="birthday" id="birthday">
        <!-- input per il indirizzo -->
        <input type="text" name="address" id="address" placeholder="Idirizzo di residenza">
        <!-- input per la città -->
        <input type="text" name="city" id="city" placeholder="Città">
        <!-- input per numero di telefono -->
        <input type="number" name="phone_number" id="phone_number" placeholder="3401234567">
        <!-- input submit di registrazione -->
        <input type="submit" value="Registrati">
    </form>
</x-layout>