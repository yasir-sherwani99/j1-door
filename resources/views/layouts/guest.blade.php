<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('layouts.partials._guest_head')

<body>
    <!-- Preloader start -->
    @include('layouts.partials._loader')
    <!-- Preloader end -->
    <div class="wrapper">
        <!-- header start -->
        <header>
            @include('layouts.partials._guest_header_top')
            @include('layouts.partials._guest_header_bottom')              
        </header>
        <!-- header end -->

        @yield('content')

        <!-- footer start -->
        <footer class="bg-white">
            @include('layouts.partials._guest_footer_top')
            @include('layouts.partials._guest_footer_bottom')
        </footer>
        <!-- footer end -->
    </div>
    @include('layouts.partials._guest_script')
</body>