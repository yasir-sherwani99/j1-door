@extends('layouts.guest')

@section('content')
    <section class="hero-sec pt-box">
        <div class="container-fluid">
            <div class="text-holder text-center">
                @include('guest.inc.banner_top')
                @include('guest.inc.banner_info')
            </div>
        </div>
    </section>

    @include('guest.inc.why_us')
    @include('guest.inc.get_started')
    @include('guest.inc.find_distributor')
    @include('guest.inc.features')
    @if(count($testimonials) > 0)
        @include('guest.inc.testimonial')
    @endif
    
@endsection