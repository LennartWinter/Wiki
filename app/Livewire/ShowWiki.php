<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Article;

class ShowWiki extends Component
{
    public $article;

    public function mount()
    {
        $slug = request()->route('slug');
        $this->article = Article::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.show-wiki');
    }
}