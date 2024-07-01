@extends('layouts.guest')

@section('content')

    @include('guest.inc.find_distributor')

    @include('guest.inc.map_dist')

    <!--  @include('guest.inc.services') -->

    @if(count($testimonials) > 0)    
        @include('guest.inc.testimonial')
    @endif

@endsection