<?php
    $page = $blogs->currentPage();
    $total = $blogs->total();
    $perPage = $blogs->perPage();
    $showingTotal = $page * $perPage;

    $currentShowing = $showingTotal > $total ? $total : $showingTotal;
    $showingStarted = $showingTotal - $perPage;
?>

<div class="blogHead d-flex justify-content-between align-items-center mb-4">
    <div class="d-flex align-items-center">
        <label for="exampleFormControlInput1" class="form-label font-weight-sbold font-16 mb-0"
            >Filter by:</label
        >
        <select class="form-select font-14" id="blog_filter" aria-label="Tag Filter">
            <option value="">Select</option>
            @foreach($tags as $tag)
                <option 
                    value="{{ $tag->id }}"
                    {{ $selectedTag == $tag->id ? 'selected' : '' }}
                >
                    {{ $tag->name }}
                </option>
            @endforeach
        </select>
    </div>
    <p>Showing {{ $showingStarted }} - {{ $currentShowing }} of {{ $total }} results</p>
</div>
