<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    // dichiaro gli attributi presenti all'interno del componente livewire
    public $title, $body, $successMessage, $price, $category;
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
            'title' => 'required|min:8',
            'body' => 'required|min:8',
            'price' => 'required|numeric',
            'category'=> 'required',
        ]);

        $article = new Article;

        $article->title = $this->title;
        $article->body = $this->body;
        $article->price = $this->price;
        $article->category_id=$this->category;
        $article->user_id=Auth::user()->id;
        $article->save();

        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->successMessage = 'Articolo aggiunto con successo';
       
    }

}
