<div class=" mb-4 bgColorThree   rounded shadowcard ">
    <div class="row justify-content-center g-0">
        <div class=" d-flex justify-content-center col-12 col-lg-4 p-3">
            <a href="{{ route('article.show', compact('article')) }}"> <img
                    class=" img-fluid border rounded  borderimg shadowimg  " src="{{$article->images->isNotEmpty()?Storage::url($article->images->first()->path) : 'https://picsum.photos/200'}}" alt="Immagine dell'articolo {{$article->title}}">
            </a>
        </div>
        <div class="col-md-7  text-center d-flex align-items-center p-3 pb-0 ">
            <div class="card-body ">
                <h5 class="card-title fs-3 expletus">{{ $article->title }}</h5>
                
                <h5 class="card-title fs-4"><a class=" anchorCard ColorTwo text-decoration-none"
                        href="{{ route('article.category', $article->category) }}">{{ __('ui.'.$article->category->name) }}</a>
                </h5>
                <h5 class="card-title fs-4 text-warning">{{ $article->price }} €</h5>
                <p class="card-text fs-4">{{ $article->body }}</p>
               
                <p class="d-flex justify-content-end align-items-center m-0">Caricato da: {{ $article->user->name }}, {{ $article->created_at->format('d M Y') }}</p>
            </div>
        </div>
    </div>
</div>
