<x-layout>

    <x-header2 title="{{ __('ui.detailAds') }}" />

    <div class="container mt-5">
        <div class=" row justify-content-center bgColorThree pt-2 mb-5 rounded mx-3 mx-md-0">
            <div class="col-10 col-md-6 ">
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2 ">
                    @if ($article->images->count()>0)                  
                    <div class="swiper-wrapper">
                        @foreach ($article->images as $key =>$image)
                        <div class="swiper-slide rounded  p-3 bgColorFour">
                            <img class="rounded shadowImgCarousel " src="{{Storage::url($image->path)}}" alt="Immagine {{$key + 1}} dell'articolo {{$article->title}}" />
                        </div>
                        @endforeach
                       
                    </div>

                    @if ($article->images->count()> 1)
                        <div class="swiper-button-next ColorThree me-2"></div>
                        <div class="swiper-button-prev ColorThree ms-2"></div>
                    @endif
                </div>
                @endif
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        @foreach ($article->images as $key =>$image)
                        <div class="swiper-slide shadowcard">
                            <img src="{{Storage::url($image->path)}}" alt="Immagine {{$key + 1}} dell'articolo {{$article->title}}" />
                        </div>
                        @endforeach
                       
                    </div>
                    {{-- <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-10 col-md-6">
                <h2 class="expletus">{{ $article->title }}</h2>
                <h2 class="raleway ColorFour fs-4">{{ $article->price }} €</h2>
                
                <p class="raleway "><a class="ColorTwo" href="{{route('article.category', $article->category)}}">{{ $article->category->name }}</a></p>
                <p class="raleway">{{ $article->body }}</p>
                <p class="raleway text-small">Caricato da {{$article->user->name}}, il {{$article->created_at->format('d M Y')}}</p>
            </div>
        </div>
    </div>

</x-layout>
