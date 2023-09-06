<div>

<!-- eorri di defaul per errata compliazione del form livewire -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- input per inserimento titolo -->
<input type="text" wire:model="title" placeholder="Titolo" value="{{$title}}">
<!-- input per inserimento descrizione -->
<textarea wire:model="body" cols="30" rows="10" placeholder="Descrizione">{{$body}}</textarea>
<!-- input per inserimento prezzo -->
<input type="number" wire:model="price" placeholder="€" value="{{$price}}">


<!-- select per scegliere la categoria -->

<div>
    <label for="category">Categoria</label>
    <select wire:model="category" id="category" class="form-control">
        <option value="">Scegli la categoria</option>
        @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach

    </select>
</div>
<!-- input per salvataggio dati nel database -->
<input type="button" wire:click="store" value="Aggiungi">
<!-- messaggio in caso successo per avvenuto inserimento dell'articolo -->
<p class="text-success">{{$message}}</p>

</div>
