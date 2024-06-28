<x-layout>
    <x-header2 title='{{ __('dashboardTitle') }}' />

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container-fluid pt-5">

        @if ($article)
            <div class="row justify-content-center pt-5">
                <div class="col-md-8">
                    <div class="row justify-content-center">
                        @for ($i = 0; $i < 1; $i++)
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ $article->images }}" class="d-block w-100" alt="...">
                          </div>
                        @endfor
                    </div>
                </div>
                <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                    <div>
                        <h1>{{ $article->title }}</h1>
                        <h3>{{ __('author') }}: {{ $article->user->name }} </h3>
                        <h4>{{ $article->price }}€</h4>
                        <h4 class="fst-italic text-muted">#{{ __('ui.' . $article->category->name) }}</h4>
                        <p class="h6">{{ $article->description }}</p>
                    </div>
                    <div class="d-flex pb-4 justify-content-around">
                        <form action="{{ route('reject', ['article' => $article]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-danger py-2 px-5 fw-bold ">{{ __('ui.reject') }}</button>
                        </form>
                        <form action="{{ route('accept', ['article' => $article]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btn-success py-2 px-5 fw-bold ">{{ __('ui.accept') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        @else
            <div class="row justify-content-center align-items-center height-custom text-center">
                <div class="col-12">
                    <h1 class="fst-italic display-4">
                        {{ __('noArticlesToReview') }}
                    </h1>
                    <a href="{{ route('home') }}" class="mt-5 btn btn-success">{{ __('backToHomepage') }}</a>
                </div>
            </div>
        @endif
    </div>
</x-layout>
