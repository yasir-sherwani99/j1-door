@extends('layouts.guest')

@section('style')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endsection

@section('content')

    <section class="find-sec pt-box">
        <div class="container-fluid">
            <div class="find-inner text-center m-auto w-100 text-white">
                <h4 class="font-weight-sbold text-capitalize">Request a quote</h4>
                <p class="font-24 font-weight-nomral">
                    Talk to our experts or browse through
                    <br />
                    more doors.
                </p>
                @include('guest.inc.quote_form', ['new_class' => ''])
            </div>
        </div>
    </section>

    @include('guest.inc.map')

    @if(count($testimonials) > 0)
        @include('guest.inc.testimonial')
    @endif

@endsection
