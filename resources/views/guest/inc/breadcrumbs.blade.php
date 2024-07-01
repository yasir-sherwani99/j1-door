<nav class="breadcrumb-box d-inline-block mb-4" aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        @if(isset($page))
            <li class="breadcrumb-item"><a href="#">{{ $section }}</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $page }}</li>
        @else
            <li class="breadcrumb-item active" aria-current="page">{{ $section }}</li>
        @endif
    </ol>
</nav>