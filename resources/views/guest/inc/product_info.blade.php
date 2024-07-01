<div class="product-info">
    <h4 class="font-weight-sbold mb-2">{{ $product->title }}</h4>
    @if(isset($product->sub_title))
        <h6 class="font-16 font-weight-bold">
            {{ $product->subtitle }}
        </h6>
    @endif
    <div class="product-dis">
        {!! $product->description !!}
    </div>
    <div class="d-flex btn-holder">
        <a href="{{ route('guest.quote.index') }}" class="btn btn-solid me-3 big-btn"> Request a quote </a>
        <a href="#" class="btn btn-solid btn-black text-white big-btn">
            <img class="me-3" src="{{ asset('images/svg/phone-white.svg') }}" alt="" /> (347) 256 - 7157
        </a>
    </div>
</div>