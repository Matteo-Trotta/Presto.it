<x-layout>
    <x-header2 title="{{ __('ui.dashboardTitle') }}" />
    
    
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    
    <div class="container  my-5 ">
        
        @if ($article)
        <div class="row justify-content-start bgColorThree mb-5  rounded mx-3 mx-md-0  position-relative p-md-5 p-2">
            {{-- <div class=" col-6 my-3"> --}}
                {{-- @for ($i = 0; $i < 1; $i++) --}} 
                @if ($article->images->count() > 0)
                <div class="col-12 col-md-7 position-relative d-flex justify-content-center">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                    class="swiper mySwiper2 shadowcard rounded d-flex justify-content-center">
                   
                    <div class="swiper-wrapper">
                        @foreach ($article->images as $key => $image)
                        <div class="swiper-slide rounded  p-3 bgColorThree">
                            <img class="rounded shadowImgCarousel "
                            src="{{ $image->getUrl(1200, 1200) }}"
                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}" />
                        </div>
                        @endforeach
                        
                    </div>
                    
                    @if ($article->images->count() > 1)
                    <div class="swiper-button-next ColorThree me-2"></div>
                    <div class="swiper-button-prev ColorThree ms-2"></div>
                    @endif
                </div>
                
                 @if ($article->images->count() > 1)
                <div thumbsSlider="" class="swiper mySwiper position-absolute bottom-0">
                   
                    <div class="swiper-wrapper">
                        @foreach ($article->images as $key => $image)
                        <div class="swiper-slide shadowcard rounded">
                            <img src="{{ $image->getUrl(1200, 1200) }}"
                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}" />
                        </div>
                        @endforeach
                        
                </div>
            </div>
            @endif
               
                </div> 
                @else
                <div class="col-12 col-md-7 position-relative d-flex justify-content-center">
                    <img class="img-fluid rounded" src="https://picsum.photos/1200/1200" alt="Nessuna foto inserita">
                    </div>
                    @endif

                
                {{-- @endfor --}}
            {{-- </div> --}}
            <div class="col-10 col-md-4 ms-3">
            <div>
                <h2 class="expletus ColorTwo fs-1 fw-bold">{{ $article->title }}</h2>
                <h2 class="raleway ColorFour">{{ $article->price }} €</h2>
                
                <p class="raleway ">
                    <a class="fs-3 ColorFour fw-bold" href="{{ route('article.category', $article->category) }}">
                        {{ __('ui.' . $article->category->name) }}
                    </a>
                </p>
                <p class="raleway">{{ $article->body }}</p>
                <p class="raleway raleway fst-italic">{{ __('ui.publishedby') }}: {{ $article->user->name }},
                    {{ __('ui.on') }}: {{ $article->created_at->format('d M Y') }}</p>
                </div>
                <div class="d-flex align-items-end pb-4 ">
                    <form action="{{ route('reject', ['article' => $article]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btnSubmit3 ColorTwo me-3 fw-bold ">{{ __('ui.reject') }}</button>
                    </form>
                    <form action="{{ route('accept', ['article' => $article]) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button class="btn btnSubmit  fw-bold ">{{ __('ui.accept') }}</button>
                    </form>
                </div>
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
