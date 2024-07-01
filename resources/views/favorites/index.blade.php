<x-layout>
    <x-header2
    title="{{ __('ui.favorites') }}"
    />

    <div class="container my-5">
        
        @if($favorites->isEmpty())
            <p>{{ __('ui.noFavorites') }}</p>
        @else
            @foreach ($favorites as $article)
            <div class=" mb-4 bgColorThree   rounded shadowcard position-relative ">
                <div class="row justify-content-center g-0">
                    <div class=" d-flex justify-content-center col-12 col-lg-4 p-3">
                        <a href="{{ route('article.show', compact('article')) }}"> <img
                                class=" img-fluid border rounded  borderimg shadowimg" src="{{$article->images->isNotEmpty()?$article->images->first()->getUrl(1000,600):''}}" alt="Immagine dell'articolo {{$article->title}}">
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
                           
                            <p class="d-flex justify-content-end align-items-center m-0">{{ __('ui.publishedby')}}: {{ $article->user->name }}, {{ $article->created_at->format('d M Y') }}</p>
                            <form method="POST" action="{{route('articles.favorite', $article->id)}}">
                                @csrf
                            <button type="submit" class="btn shadow-none position-absolute top-0 end-0" style="outline: none;">
                                @if (Auth::user()->favorites->contains($article->id))
                                
                                    <i class="fa-solid fa-heart fa-2x" style="color: #e60505;"></i>
                                @else
                                    <i class="fa-regular fa-heart fa-2x" style="color: #e60505;"></i>
                                @endif
                            </button>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
        @endif
    </div>

</x-layout>