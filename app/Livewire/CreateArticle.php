<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    #[Validate('required', message: 'Il titolo è richiesto')]
    public $title;
    #[Validate('required', message: 'Il prezzo è richiesto')]
    public $price;
    #[Validate('required', message: 'Il prezzo è richiesto')]
    public $description;
    #[Validate('required', message: 'La Categoria è richiesta')]
    public $category;

    public function createArticle(){

        $this->validate();

        Auth::user()->articles()->create([
            'title'=> $this->title,
            'price' => $this->price,
            'body' => $this->description,
            'category' => $this->category,
        ]);
        
        $this->reset();
        session()->flash('message', 'Annuncio pubblicato');
        return redirect(route('home'));
        
    }
    public function render()
    {
        $articles = Article::all();
        return view('livewire.create-article', compact('articles'));
    }
}
