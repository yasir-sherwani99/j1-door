<p class="font-16 font-weight-sbold text-end mb-4 mt-3 mt-lg-0">
    Showing 1 - {{ $products->perPage() }} of {{ $products->total() }} results
</p>
<div class="row">
    @foreach($products as $product)
        <div class="col-lg-4 col-md-6">
            <div class="categorycrd-one mb-4 border rounded-1">
                <img 
                    src="{{ isset($product->images[0]) ? asset($product->images[0]->src) : '#' }}" 
                    alt="{{ $product->title }}" 
                    class="rounded-1"
                    onerror="this.onerror=null;this.src='{{ asset('admin-assets/images/default/default-product.jpg') }}';" 
                />
                <div class="categorycrd-text px-3 pb-3">
                    <h3 class="font-20 font-weight-sbold">{{ $product->title }}</h3>
                    @if(isset($product->sub_title))
                        <p class="font-weight-medium font-16 textgry mb-4">{{ $product->sub_title }}</p>
                    @endif
                    @if(count($product->specifications) > 0)
                        <ul>
                            @foreach($product->specifications as $key => $spec)
                                @if($key < 2)
                                    <li class="font-14">
                                        <strong class="font-weight-sbold">{{ $spec->spec_name }}:</strong>
                                        <span class="font-weight-medium textgry">{{ $spec->spec_details }}</span>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    @else
                        <div class="mb-4">
                            <p class="font-14">{!! \Str::limit($product->description, 150) !!}</p>
                        </div>
                    @endif
                    <a href="{{ route('guest.product.details', $product->slug) }}" class="btn btn-solid w-100 big-btn"> View Details </a>
                </div>
            </div>
        </div>
    @endforeach
</div>
<div class="row mt-3">
    <div class="col-lg-12">
        {{ $products->links('vendor.pagination.custom') }} 
    </div>
</div>
    