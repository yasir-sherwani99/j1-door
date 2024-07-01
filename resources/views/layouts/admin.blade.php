<!DOCTYPE html>
<html lang="en">
@include('layouts.partials._admin_head')
<body id="body" class="light-sidebar menuitem-active">
    @include('layouts.partials._admin_left_sidebar')
    @include('layouts.partials._admin_topbar')
    <div class="page-wrapper">
        <div class="page-content-tab">
            <div class="container-fluid">
                @include('layouts.partials._admin_breadcrumbs')
                @yield('content')
            </div>
            @include('layouts.partials._admin_footer')
        </div>
    </div>
    @vite('resources/js/admin.js')
    @yield('script')
</body>
</html>