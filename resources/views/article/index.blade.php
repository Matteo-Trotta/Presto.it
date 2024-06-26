<x-layout>

    <x-header2 title='Tutti gli Annunci'/>

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
