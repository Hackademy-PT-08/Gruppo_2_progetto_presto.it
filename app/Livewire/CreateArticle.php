<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    // dichiaro gli attributi presenti all'interno del componente livewire
    public $Titolo, $Descrizione, $successMessage, $Prezzo, $Categoria;
    public function render()
    {
        $categories= Category::all();
        return view('livewire.create-article', ['categories'=>$categories]);
    }

    //messaggi di errore custommizzati
    protected $messages =
    ['required'=>'Il campo :attribute è obbligatorio',
    'min'=>'Inserisci un :attribute almeno 8 caratteri',
    'numeric'=>'Il campo :attribute deve essere numerico',];

    // funzione di salvataggio articoli nel database
    public function store()
    {
        //validazione degli input del form
        $validated = $this->validate([
            'Titolo' => 'required|min:8',
            'Descrizione' => 'required|min:8',
            'Prezzo' => 'required|numeric',
            'Categoria'=> 'required',
        ]);

        $article = new Article;

        $article->title = $this->Titolo;
        $article->body = $this->Descrizione;
        $article->price = $this->Prezzo;
        $article->category_id=$this->Categoria;
        $article->user_id=Auth::user()->id;
        $article->save();

        $this->Titolo = '';
        $this->Descrizione = '';
        $this->Prezzo = '';
        $this->Categoria = '';
        $this->successMessage = 'Articolo aggiunto con successo';
       
    }

}
