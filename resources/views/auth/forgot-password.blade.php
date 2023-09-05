<x-layout>

    <!-- form per recupero password -->
    <form action="/forgot-password" method="post">
        @csrf
        <input type="email" name="email" id="email" placeholder="email">
        <input type="submit" value="richiedi nuova password">
    </form>

    <!-- messaggio con stato della richiesta di recupero password -->
    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            <p> {{ session('status') }}</p>
           
        </div>
    @endif
    <!-- messaggi di errore nel caso la richiesta non vada a buon fine -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</x-layout>