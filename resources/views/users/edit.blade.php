<x-layout>

<!-- creare la vista+++++ con un 2 form:
1)action="/user/profile-information" method= "post" @csrf @method('PUT')
input name=name e email e nel value="{{auth()->user()->nomecolonna}}"
input sumbit per aggiornare i dati
2)action="/user/password" method= "post" @csrf @method('PUT')
input name=current_password password e password password_confirmation 
input sumbit per aggiornare password -->

<form action="/user/profile-information" method="post">
    @csrf 
    @method('PUT')
    <!-- input per il nome -->
    <input type="text" name="name" id="name" value="{{auth()->user()->name}}">
    <!-- input modifica per il cognomenome -->
    <input type="text" name="surname" id="surname" value="{{auth()->user()->surname}}">
    <!-- input modifica per l'email -->
    <input type="email" name="email" id="email" value="{{auth()->user()->email}}">
    <!-- input modifica per la data di nascita -->
    <input type="date" name="birthday" id="birthday" value="{{auth()->user()->birthday}}">
    <!-- input modifica per il indirizzo -->
    <input type="text" name="address" id="address" value="{{auth()->user()->address}}">
    <!-- input modifica per la città -->
    <input type="text" name="city" id="city" value="{{auth()->user()->city}}">
    <!-- input modifica per numero di telefono -->
    <input type="number" name="phone_number" id="phone_number" value="{{auth()->user()->phone_number}}">
    <!-- input submit di registrazione -->
    <input type="submit" value="Modifica Credenziali">

</form>

<form action="/user/password" method="post">
    @csrf 
    @method('PUT')
    <!-- input per la password corrente -->
    <input type="password" name="current_password" id="current_password" placeholder="inserisci la vecchia password">
    <!-- input modifica per la password -->
    <input type="password" name="password" id="password" placeholder="inserisci la nuova una password">
    <!-- input modifica per la conferma password -->
    <input type="password" name="password_confirmation" id="password_confirmation" placeholder="conferma password">
    <!-- input submit modifica password -->
    <input type="submit" value="Modifica Password">
</form>


</x-layout>