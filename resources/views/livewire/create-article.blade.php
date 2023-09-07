<div>

<!-- errorri di defaul per errata compliazione del form livewire

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 -->

<!-- input per inserimento titolo -->
<div class="mb-3">
<label for="title"> Titolo Annuncio</label>
<input type="text" wire:model="title" placeholder="Titolo" value="{{$title}}" @error('title') is-invalid @enderror>
@error('title')
    {{$message}}
@enderror
</div>
<!-- input per inserimento descrizione -->
<div class="mb-3">
<label for="body"> Descrizione</label>
<textarea wire:model="body" cols="30" rows="10" placeholder="Descrizione" @error('body') is-invalid @enderror>{{$body}}</textarea>
@error('body')
    {{$message}}
@enderror
</div>
<!-- input per inserimento prezzo -->
<div class="mb-3">
<label for="price"> Prezzo</label>
<input type="number" wire:model="price" placeholder="€" value="{{$price}}" @error('price') is-invalid @enderror>
@error('price')
    {{$message}}
@enderror
</div>

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
<p class="text-success">{{$successMessage}}</p>

</div>
