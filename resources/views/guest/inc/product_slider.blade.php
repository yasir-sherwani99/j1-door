
<div class="position-relative thumbsSlider">
    <div class="swiper-button-next"><img src="{{ asset('images/svg/right.svg') }}" alt="" /></div>
    <div class="swiper-button-prev"><img src="{{ asset('images/svg/left.svg') }}" alt="" /></div>
    <div class="swiper mySwiper2">
        <div class="swiper-wrapper">
            @foreach($images as $image)
                <div class="swiper-slide">
                    <img src="{{ asset($image->src) }}" alt="{{ $title }}" />
                </div>
            @endforeach
        </div>
    </div>
    <div
        thumbsSlider=""
        style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
        class="swiper mySwiper"
    >
        <div class="swiper-wrapper">
            @foreach($images as $image)
                <div class="swiper-slide">
                    <img src="{{ asset($image->src) }}" alt="{{ $title }}" />
                </div>
            @endforeach
        </div>
    </div>
</div>