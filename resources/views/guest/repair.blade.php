@extends('layouts.guest')

@section('content')

    @include('guest.inc.banner_main', ['title' => 'Garage Door Repair', 'new_class' => 'repair-sec-banner'])

    <!-- need-sec -->
    <section class="need-sec">
        <div class="container container-small">
            @include('guest.inc.breadcrumbs', ['section' => 'Services', 'page' => 'Repair My Garage Door'])
            <div class="row">
                <div class="col-lg-5">
                    @include('guest.inc.repair_details')
                </div>
                <div class="col-lg-7">
                    @include('guest.inc.quote_form', ['new_class' => 'w-100 p-0'])
                </div>
            </div>
        </div>
    </section>

    @include('guest.inc.find_distributor')

    <!-- repair-card-sec -->
    <section class="services-card-sec repair-card-sec common-reair-sec">
        <div class="container container-small">
            <div class="row">
                <div class="col-lg-5">
                    @include('guest.inc.garage_problems')
                </div>
                <div class="col-lg-7">
                    @include('guest.inc.brand_box', ['className' => 'repair-brand', 'image' => 'images/others/comman.png'])
                </div>
            </div>
        </div>
    </section>

@endsection