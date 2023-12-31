<?php

namespace App\Livewire;
use App\Models\Article;
use Livewire\Component;
use App\Models\User;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;
class ArticleIndex extends Component

{
    use WithPagination;
    
    public function render()
    {
        Paginator::useBootstrap();
        $articles=Article::where('is_accepted', true)->paginate(6);
       
       
        return view('livewire.article-index', ['articles'=>$articles]);
    }
}
