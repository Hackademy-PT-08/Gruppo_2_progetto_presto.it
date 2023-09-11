<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Revisor;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article_to_check = Article::where('is_accepted', null)->first();
        return view('revisors.index', compact('article_to_check'));
    }

    // Funzione per accettare articoli
    public function acceptArticle(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message', "Hai accettato l'annuncio");
    }

    
//    Funzione per rifiutare annunci
    public function rejectArticle(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message', "Hai rifiutato l'annuncio");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Revisor $revisor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Revisor $revisor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Revisor $revisor)
    {
        //
    }
}
