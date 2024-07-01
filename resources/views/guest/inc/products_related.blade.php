<section class="realted-sec">
    <div class="container">
        <h3 class="font-weight-bold">Related Products</h3>
        <div class="swiper mySwiper3">
            <div class="swiper-wrapper">
                @foreach($relatedProducts as $product)
                    <div class="swiper-slide">
                        <div class="product-crd border rounded-1">
                            <img 
                                src="{{ isset($product->images[0]) ? asset($product->images[0]->src) : '#' }}" 
                                alt="{{ $product->title }}" 
                                class="w-100 rounded-1"
                                onerror="this.onerror=null;this.src='{{ asset('admin-assets/images/default/default-product.jpg') }}';" 
                            />
                            <div class="product-heading">
                                <h4 class="font-20 {{ !isset($product->sub_title) ? 'mb-4' : '' }}">{{ $product->title }}</h4>
                                @if(isset($product->sub_title))
                                    <p class="font-16">{{ $product->sub_title }}</p>
                                @endif
                                <a 
                                    href="{{ route('guest.product.details', $product->slug) }}" 
                                    class="btn btn-solid btn-black text-white font-weight-nomral">
                                    + View Details
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>