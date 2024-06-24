<div class="card mb-3 bg-transparent m-5 border-0 shadow-0">
    <div class="row g-0 m-5">
        <div class="col-md-4">

            <a href="{{ route('article.show', compact('article')) }}"> <img
                    class="img-fluid border rounded-circle p-1 borderimg shadowcard" src="https://picsum.photos/200"
                    class="img-fluid rounded-start" alt="...">
            </a>
        </div>
        <div class="col-md-8 cards bgColorThree  rounded ">
            <div class="card-body m-3 ms-5">
                <h5 class="card-title fs-3">{{ $article->title }}</h5>
                <h5 class="card-title fs-4 text-warning">{{ $article->price }} €</h5>
                <h5 class="card-title fs-4"><a class=" anchorCard ColorTwo text-decoration-none"
                        href="{{ route('article.category', $article->category) }}">{{ $article->category->name }}</a>
                </h5>
                <p class="card-text fs-4">{{ $article->body }}</p>

            </div>
        </div>
    </div>
</div>
