<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class CreateArticle extends Component
{
    // dichiaro gli attributi presenti all'interno del componente livewire
    public $title, $body, $message, $price, $category;
    public function render()
    {
        $categories= Category::all();
        return view('livewire.create-article', ['categories'=>$categories]);
    }
    // funzione di salvataggio articoli nel database
    public function store()
    {
        //validazione degli input del form
        $validated = $this->validate([
            'title' => 'required',
            'body' => 'required',
            'price' => 'required|numeric',
            'category'=> 'required'
        ]);

        $article = new Article;

        $article->title = $this->title;
        $article->body = $this->body;
        $article->price = $this->price;
        $article->category_id=$this->category;
        $article->save();

        $this->title = '';
        $this->body = '';
        $this->price = '';
        $this->message = 'Articolo aggiunto con successo';
       
    }

}
