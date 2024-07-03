<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use App\Jobs\ResizeImage1200;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage; // Assicurati di importare Storage

class CreateArticle extends Component
{
    use WithFileUploads;

    #[Validate('required', message: 'Il titolo è richiesto')]
    public $title;
    #[Validate('required', message: 'Il prezzo è richiesto')]
    public $price;
    #[Validate('required', message: 'Il prezzo è richiesto')]
    public $body;
    #[Validate('required', message: 'La Categoria è richiesta')]
    public $category;

    public $images = [];

    public $temporary_images;

    protected function cleanForm()
    {
        $this->title = '';
        $this->price = '';
        $this->body = '';
        $this->category = '';
        $this->images = [];
    }

    public function createArticle()
    {
        $this->validate();

        $this->article = Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'body' => $this->body,
            'category_id' => $this->category,
            'user_id' => Auth::id()
        ]);

        // Salvataggio e manipolazione delle immagini
        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);

                // Catena di operazioni asincrone
                RemoveFaces::withChain([
                    new ResizeImage($newImage->path, 350, 350),
                    new ResizeImage1200($newImage->path, 1200 , 1200),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);
            }

            // Pulizia della directory temporanea Livewire
            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }

        // Messaggio di successo e pulizia del form
        session()->flash('message', 'Il tuo annuncio è in attesa di revisione');
        $this->cleanForm();

        // Reindirizzamento alla home
        return redirect(route('home'));
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:10240',
            'temporary_images' => 'max:6'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (array_key_exists($key, $this->images)) {
            unset($this->images[$key]);
        }
    }

    public function render()
    {
        $articles = Article::all();
        return view('livewire.create-article', compact('articles'));
    }
}
