@extends('layouts.guest')

@section('content')
    
    @include('guest.inc.banner_main', ['title' => $pageTitle, 'new_class' => ''])

    <section class="filter-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    @include('guest.inc.filter_sidebar')
                </div>
                <div class="col-lg-9">
                    @include('guest.inc.products_result', ['products' => $products])
                </div>
            </div>
        </div>
    </section>

    @include('guest.inc.find_distributor')

@endsection