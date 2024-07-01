@extends('layouts.guest')

@section('style')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')

    @include('guest.inc.banner_main', [
        'title' => 'Services', 
        'new_class' => 'services-sec', 
        'text' => 'When in need of garage door repair for safe and dependable garage door operation, always keep in mind, The Genuine. The Original. Overhead Door™ products and services.'
    ])

    <!-- need-sec -->
    <section class="need-sec">
        <div class="container container-small">
            @include('guest.inc.breadcrumbs', ['section' => 'Services'])
            <div class="row">
                <div class="col-lg-5">
                    <div class="need-servies-text">
                        <h5 class="font-40 mb-4 pb-4 border-bottom">Need Service?</h5>
                        <p class="mb-3">
                            In need of garage door repair? Contact one of our many well-trained garage door
                            repair professionals today to provide your garage door system with the recommended
                            service and maintenance procedures for smooth and reliable operation. Our garage
                            door repair professionals are here for you, whether you want to fix your existing
                            garage door or buy a new garage door. Are you looking to replace a garage door
                            spring, cable or roller or searching for 'garage door repair near me'?
                        </p>
                        <p>Use our distributor locator below:</p>

                        @include('guest.inc.phone_box')

                        @include('guest.inc.quote_form', ['new_class' => 'w-100 p-0'])

                    </div>
                </div>
                <div class="col-lg-7">
                    @include('guest.inc.brand_box', ['className' => 'services-brand', 'image' => 'images/others/s-brand.png'])
                </div>
            </div>
        </div>
    </section>

    <!-- services-card-sec -->
    <section class="services-card-sec">
        <div class="container container-small">
            <div class="row">
                <div class="col-lg-6">
                    @include('guest.inc.emergency_section')
                </div>
                <div class="col-lg-6">
                    @include('guest.inc.looking_for_section')
                </div>
            </div>
        </div>
    </section>

    <!-- common-sec -->
    @include('guest.inc.common_problem_accordion')

    <!-- repair-card-sec -->
    <section class="services-card-sec repair-card-sec">
        <div class="container container-small">
            <div class="row">
                <div class="col-lg-5">
                    @include('guest.inc.repair_vs_replace_section')
                </div>
                <div class="col-lg-7">
                    @include('guest.inc.brand_box', ['className' => 'repair-brand', 'image' => 'images/others/repair.png'])
                </div>
            </div>
        </div>
    </section>

    <!-- repair-card-sec -->
    <section class="services-card-sec">
        <div class="container container-small">
            <div class="row">
                <div class="col-lg-6">
                    @include('guest.inc.brand_box', ['className' => 'repair-brand', 'image' => 'images/others/faq.png'])
                </div>
                <div class="col-lg-6">
                    @include('guest.inc.faqs')
                </div>
            </div>
        </div>
    </section>

@endsection