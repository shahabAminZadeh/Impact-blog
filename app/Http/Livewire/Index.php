<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    public $newArticles;
    public $bestArticles;
    public function mount()
    {
        $this->newArticles=Article::orderBy('id','desc')->take(3)->get();
        $this->bestArticles=Article::orderBy('id','asc')->take(3)->get();
    }
    public function render()
    {
        return view('livewire.index');
    }
}
