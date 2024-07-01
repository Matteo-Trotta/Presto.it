<x-layout>

    <x-header2 title="{{ __('ui.detailAds') }}" />

    <div class="container mt-5">
        <div class=" row justify-content-center bgColorThree pt-2 mb-5 rounded mx-3 mx-md-0 position-relative">


            @auth

                <form action="{{ route('articles.favorite', $article->id) }}" method="POST">
                    @csrf

                    <button type="submit"
                        class="btn text-decoration-none shadow-none position-absolute top-0 end-0 mt-3 me-3">
                        @if (Auth::user()->favorites->contains($article->id))
                            <i class="fa-solid fa-heart fa-2x" style="color: #e60505;"></i>
                        @else
                            <i class="fa-regular fa-heart fa-2x" style="color: #e60505;"></i>
                        @endif
                    </button>
                </form>


            @endauth

            <div class="col-10 col-md-6 ">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                    @if ($article->images->count() > 0)
                        <div class="swiper-wrapper">
                            @foreach ($article->images as $key => $image)
                                <div class="swiper-slide rounded  p-3 bgColorFour">
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
                            <div class="swiper-slide shadowcard">
                                <img src="{{ $image->getUrl(1000, 600) }}"
                                    alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}" />
                            </div>
                        @endforeach

                    </div>

                </div>
            </div>

            <div class="col-10 col-md-6 ">
                <h2 class="expletus">{{ $article->title }}</h2>
                <h2 class="raleway ColorFour fs-4">{{ $article->price }} €</h2>

                <p class="raleway ">
                    <a class="ColorTwo" href="{{ route('article.category', $article->category) }}">
                        {{ __('ui.' . $article->category->name) }}
                    </a>
                </p>
                <p class="raleway">{{ $article->body }}</p>
                <p class="raleway text-small">{{ __('ui.publishedby') }}: {{ $article->user->name }},
                    {{ __('ui.on') }}: {{ $article->created_at->format('d M Y') }}</p>
            </div>
        </div>
    </div>

</x-layout>
