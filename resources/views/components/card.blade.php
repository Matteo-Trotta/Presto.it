<div class="card mb-3">
    <div class="row g-0">
        <div class="col-md-4">
            <img class="img-fluid" src="https://picsum.photos/200" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <h5 class="card-title">{{ $article->price }}</h5>
                <h5 class="card-title"><a href="{{route('article.category', $article->category)}}">{{ $article->category->name}}</a></h5>
                <p class="card-text">{{ $article->body }}</p>

            </div>
        </div>
    </div>
</div>
