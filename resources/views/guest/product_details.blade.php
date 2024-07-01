@extends('layouts.guest')

@section('content')

    <section class="product-sec pt-box-2">
        <div class="container">
            @include('guest.inc.breadcrumbs', ['section' => 'Products', 'page' => $product->title])
            <div class="row">
                <div class="col-lg-6">
                    @include('guest.inc.product_slider', ['images' => $product->images, 'title' => $product->title])
                </div>
                <div class="col-lg-6">
                    @include('guest.inc.product_info', ['product' => $product])
                </div>
            </div>
        </div>
    </section>

    @include('guest.inc.product_tabs', ['product' => $product, 'specifications' => $product->specifications, 'documents' => $product->documents])

    @include('guest.inc.products_related', ['relatedProducts' => $relatedProducts])
    
    @include('guest.inc.find_distributor')

@endsection
