<x-layout>

    <x-header2 title='Tutti gli Annunci'/>

    <div class="my-3 text-center">
        @auth
            <a class="btn btn-outline" href="{{ route('article.create') }}"><span class="me-2 fs-6"><i
                        class="fa-solid fa-plus"></i></span>Aggiungi annuncio</a>
        @endauth
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            @foreach ($articles as $article)
                <div class="col-8 ">
                    <x-card :article="$article" />
                </div>
            @endforeach
        </div>
    </div>

</x-layout>
