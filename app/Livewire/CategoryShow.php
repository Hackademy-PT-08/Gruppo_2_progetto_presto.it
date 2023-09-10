<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class CategoryShow extends Component
{
    use WithPagination;
    public $categoryId;

   
    public function render()
    {
        Paginator::useBootstrap();
        $category=Category::find($this->categoryId);
        $currentCategory=$category->articles()->where('is_accepted', true)->paginate(6);
        
      
        return view('livewire.category-show', ['category'=>$currentCategory]);
    }
}
