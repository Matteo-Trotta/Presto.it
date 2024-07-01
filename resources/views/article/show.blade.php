<x-layout>

    <x-header2 title="{{ __('ui.detailAds') }}" />

    <div class="container mt-5">
        <div class=" row justify-content-center bgColorThree pt-2 mb-5 rounded mx-3 mx-md-0 position-relative">


            @auth

                <div class="d-none d-md-block">
                    <livewire:favorite-button :article="$article" />
                </div>

            @endauth

            <div class="col-10 col-md-6 ">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                    @if ($article->images->count() > 0)
                        <div class="swiper-wrapper">
                            @auth
                                <div class="d-block d-md-none">
                                    <livewire:favorite-button :article="$article" />
                                </div>
                            @endauth

                            @foreach ($article->images as $key => $image)
                                <div class="swiper-slide rounded p-3 bgColorFour">
                                    <img class="rounded shadowImgCarousel " src="{{ $image->getUrl(1000, 600) }}"
                                        alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}" />
                                </div>
                            @endforeach

                        </div>

                        @if ($article->images->count() > 1)
                            <div class="swiper-button-next ColorThree me-2"></div>
                            <div class="swiper-button-prev ColorThree ms-2"></div>
                        @endif
                </div>
                @endif
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        @foreach ($article->images as $key => $image)
                            <div class="swiper-slide shadowcard rounded">
                                <img class="rounded" src="{{ $image->getUrl(1000, 600) }}"
                                    alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}" />
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

            <div class="col-10 col-md-6 ">
                <h2 class="expletus ColorTwo display-3">{{ $article->title }}</h2>
                <h2 class="raleway ColorFour ">{{ $article->price }} €</h2>

                <p class="raleway ">
                    <a class="fs-3 ColorFour fw-bold" href="{{ route('article.category', $article->category) }}">#{{ __('ui.' . $article->category->name) }}
                    </a>
                </p>
                <p class="raleway fs-4 ColorTwo">{{ $article->body }}</p>
                <p class="raleway fst-italic">{{ __('ui.publishedby') }}: {{ $article->user->name }},
                    {{ __('ui.on') }}: {{ $article->created_at->format('d M Y') }}</p>
            </div>
        </div>
    </div>

</x-layout>
