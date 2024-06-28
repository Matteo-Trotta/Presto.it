<x-layout>
    <x-header2 title="{{__('ui.dashboardTitle') }}"/>
    

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="container  my-5 p-5">

        @if ($article)
            <div class="row justify-content-center shadowcard  bgColorThree pt-2 mb-5 rounded mx-3 mx-md-0">
                <div class=" col-6 my-3">
                    <div class="row justify-content-center ">
                        @for ($i = 0; $i < 1; $i++)
                        <div class="col-10 col-md-8 ">
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                                @if ($article->images->count() > 0)
                                    <div class="swiper-wrapper">
                                        @foreach ($article->images as $key => $image)
                                            <div class="swiper-slide rounded  p-3 bgColorFour">
                                                <img class="rounded shadowImgCarousel " src="{{ $image->getUrl(1000,600) }}"
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
                                            <img src="{{ $image->getUrl(1000,600) }}"
                                                alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}" />
                                        </div>
                                    @endforeach
            
                                </div>
                             
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
                <div class="col-10 col-md-6 my-3 d-flex flex-column align-items-center justify-content-center">
                    <div>
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
                    <div class="d-flex align-items-end pb-4 ">
                        <form action="{{ route('reject', ['article' => $article]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btnSubmit3 me-3 fw-bold ">{{ __('ui.reject') }}</button>
                        </form>
                        <form action="{{ route('accept', ['article' => $article]) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="btn btnSubmit  fw-bold ">{{ __('ui.accept') }}</button>
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
                    <a href="{{ route('home') }}" class="mt-5 btn btn-success">{{ __('ui.backToHomepage') }}</a>
                </div>
            </div>
        @endif
    </div>
</x-layout>
