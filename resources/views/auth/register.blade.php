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
        <input type="text" name="address" id="address" placeholder="Indirizzo di residenza">
        <!-- input per la città -->
        <input type="text" name="city" id="city" placeholder="Città">
        <!-- input per numero di telefono -->
        <input type="number" name="phone_number" id="phone_number" placeholder="3401234567">
        <!-- input submit di registrazione -->
        <input type="submit" value="Registrati">

        <div class="card">
            <div class="card-body py-5">
        <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</div>



    </form>
</x-layout>