<div class="card mb-4 bgColorThree   rounded shadowcard " >
    <div class="row justify-content-center g-0">
      <div class=" d-flex justify-content-center col-12 col-lg-4 p-3">
        <a href="{{ route('article.show', compact('article')) }}"> <img
            class=" img-fluid border rounded-circle  borderimg shadowimg  " src="https://picsum.photos/200">
         
    </a>
      </div>
      <div class="col-md-7  text-center p-3 ">
        <div class="card-body ">
            <h5 class="card-title fs-3 expletus">{{ $article->title }}</h5>
            <h5 class="card-title fs-4 text-warning">{{ $article->price }} €</h5>
            <h5 class="card-title fs-4"><a class=" anchorCard ColorTwo text-decoration-none"
                    href="{{ route('article.category', $article->category) }}">{{ $article->category->name }}</a>
            </h5>
            <p class="card-text fs-4">{{ $article->body }}</p>

        </div>
      </div>
    </div>
  </div>
