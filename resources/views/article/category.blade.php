<x-layout>
    <x-header />
    @foreach ($category->articles as $article)
    <div class="col-6">
    <x-card :article="$article" />
    </div>
    @endforeach
</x-layout>