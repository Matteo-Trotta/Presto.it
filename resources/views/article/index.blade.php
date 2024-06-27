<x-layout>

    <x-header title="{{ __('ui.allArticles') }}"/>

    <div class="my-3 text-center">
        @auth
            <a class="btn btn-outline" href="{{ route('article.create') }}"><span class="me-2 fs-6"><i
                        class="fa-solid fa-plus"></i></span>{{ __('ui.addAd') }}</a>
        @endauth
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            @foreach ($articles as $article)
                <div class="col-7">
                    <x-card :article="$article" />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
