<div>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<input type="text" wire:model="title" placeholder="Titolo" value="{{$title}}">

<textarea wire:model="body" cols="30" rows="10" placeholder="Descrizione">{{$body}}</textarea>

<input type="number" wire:model="price" placeholder="€" value="{{$price}}">

<input type="button" wire:click="store" value="Aggiungi">

<p class="text-success">{{$message}}</p>


</div>
