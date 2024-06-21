<x-layout>
    @if (session('message'))
        <div class="alert alert-success mt-2">
            {{ session('message') }}
        </div>
    @endif



    <x-header title='Home page' />

    <div class="container-fluid">
        <div class="row justify-content-center mt-4">
            @foreach ($articles as $article)
                <div class="col-6">
                    <x-card :article="$article" />
                </div>
            @endforeach

        </div>
    </div>





</x-layout>
