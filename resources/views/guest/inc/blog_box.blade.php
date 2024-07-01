<div class="blogscard position-relative">
    <img src="{{ asset($image) }}" alt="" />
    <div class="text-blog">
        <h5 class="font-20 font-weight-sbold mb-2">
            {{ $title }}
        </h5>
        <p class="font-16 font-weight-medium mb-4 textgry">
            {{ $description }}
        </p>

        <h6 class="font-14 font-weight-sbold position-absolute">{{ $category }}</h6>
    </div>
</div>