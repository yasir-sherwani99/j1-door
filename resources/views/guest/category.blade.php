<?php
	$fullUrl = rawurldecode(url(request()->getRequestUri()));
	$tmpExplode = explode('?', $fullUrl);
	$fullUrlNoParams = current($tmpExplode); 
?>

@extends('layouts.guest')

@section('content')
    
    @include('guest.inc.banner_main', ['title' => 'Search', 'new_class' => ''])

    <section class="filter-sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    @include('guest.inc.filter_sidebar', ['commericalFilters' => $commericalFilters, 'residentialFilters' => $residentialFilters, 'cats' => $cats])
                </div>
                <div class="col-lg-9">
                    @include('guest.inc.products_result', ['products' => $products])
                </div>
            </div>
        </div>
    </section>

    @include('guest.inc.find_distributor')

@endsection

@section('script')
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script>

        let fullUrlNoParams = "{{ $fullUrlNoParams }}";
        
        $(function () {
            $('.search').on("click", function () {
        
                let categories = "";
                
                $("input[type=checkbox][name=category]:checked").each(function (index, item) {
                    if(index == $("input[type=checkbox][name=category]:checked").length - 1) {
                        categories += item.value;
                    } else {
                        categories += item.value + ",";
                    }
                });
                
                let url = "";
                url = fullUrlNoParams + '?cat=' + categories;
                location.href = url;
             
                return false;
            });
        });
    </script>
@endsection

