@extends('layouts.guest')

@section('content')

    @include('guest.inc.find_distributor')

    @include('guest.inc.distributors_result')

    @include('guest.inc.services')

    @if(count($testimonials) > 0)    
        @include('guest.inc.testimonial')
    @endif

@endsection