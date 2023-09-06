<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticle extends Component
{
    // dichiaro gli attributi presenti all'interno del componente livewire
    public $title, $body, $message, $price;
    public function render()
    {
        return view('livewire.create-article');
    }
    // funzione di salvataggio articoli nel database
    public function store()
    {
        //Salvo il record nel database
        $validated = $this->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required|numeric'
        ]);

        $article = new Article;

        $article->title = $this->title;
        $article->body = $this->body;
        $article->price = $this->price;

        $article->save();

        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->message = 'Articolo aggiunto con successo';
       
    }

}
