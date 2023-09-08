<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;
class CategoryShow extends Component
{
    use WithPagination;
    public $categoryId;

   
    public function render()
    {
        Paginator::useBootstrap();
        $category=Category::find($this->categoryId);
        $articles = $category->articles()->paginate(3);
        return view('livewire.category-show', ['category'=>$category, 'articles' => $articles]);
    }
}
