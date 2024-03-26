<?php

namespace App\Http\Livewire\Article;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SingleArticle extends Component
{
    public $comment_body;
    public $article;
    public function mount($id)
    {
        $this->article=Article::find($id);
    }
    public function saveComment()
    {
        dd("sdfafas");
        $this->validate([
            'body'=>'required'
        ]);
        $comment= new Comment();
        $comment->user_id=Auth::user()->id;
        $comment->article_id=$this->article->id;
        $comment->body=$this->comment_body;
        $comment->save();
        $this->comment_body="";
        $this->emit('showAlert','کامنت گذاری موفق یود');
    }
    public function render()
    {
        $comments=Comment::where('article_id',$this->article->id)->get();
        return view('livewire.article.single-article',['comments'=>$comments]);
    }
}
