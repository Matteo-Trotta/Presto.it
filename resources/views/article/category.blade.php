<x-layout>
    <x-header2  title="Annunci in: {{$category->name}}"/>

    <div class="container mt-5">
        <div class="row justify-content-center">
    @foreach ($category->articles as $article)
    <div class="col-8">
    <x-card :article="$article" />
    </div>
    @endforeach
</div>
</div>
</x-layout>