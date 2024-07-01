<section class="find-sec pt-box cate-sec {{ $new_class }}">
    <div class="container-fluid">
        <div class="find-inner text-center m-auto w-100 text-white mw-100">
            <h4 class="font-weight-sbold text-white">{{ $title }}</h4>
            @if(isset($text))
                <p class="font-24 text-white mw-box m-auto w-100">
                    {{ $text }}  
                </p>
            @endif
        </div>
    </div>
</section>

