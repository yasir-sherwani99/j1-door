<?php
	$fullUrl = rawurldecode(url(request()->getRequestUri()));
	$tmpExplode = explode('?', $fullUrl);
	$fullUrlNoParams = current($tmpExplode); 
?>

@extends('layouts.guest')

@section('content')

    @include('guest.inc.banner_main', ['title' => 'Blogs', 'new_class' => 'blog-sec-banner'])

    <!-- need-sec -->
    <section class="need-sec">
        <div class="container container-small">
            @include('guest.inc.breadcrumbs', ['section' => 'Blogs'])
            @include('guest.inc.filter_blog', ['blogs' => $blogs, 'tags' => $tags, 'selectedTag' => $selectedTag])
            <div class="row">
                @if(count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="blogscard position-relative">
                                <img 
                                    src="{{ asset($blog->images[0]->src) }}" 
                                    alt="{{ $blog->title }}" 
                                    class="w-100"
                                    style="height: 250px;"
                                    onerror="this.onerror=null;this.src='{{ asset('admin-assets/images/default/default-product.jpg') }}';" 
                                />
                                <div class="text-blog">
                                    <h5 class="font-20 font-weight-sbold text-dark mb-2">
                                        {{ \Str::limit($blog->title, 50) }}
                                    </h5>
                                    <p class="font-16 font-weight-medium mb-4 textgry">
                                        {!! \Str::limit($blog->content, 175) !!}
                                    </p>
                                    @if(count($blog->tag) > 0)
                                        @foreach($blog->tag as $key => $tag)
                                            @if($key == 0)
                                                <h6 class="font-14 font-weight-sbold position-absolute text-dark">{{ $tag->name }}</h6>
                                            @endif
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-12 col-md-12">
                        <p class="font-18 text-center text-danger">No blog found!</p>
                    </div>
                @endif
            </div>
            <div class="row mt-3">
                <div class="col-lg-12">
                    {{ $blogs->withQueryString()->links('vendor.pagination.custom') }} 
                </div>
            </div>
        </div>
    </section>

    @if(count($testimonials) > 0)
        @include('guest.inc.testimonial')
    @endif

@endsection

@section('script')
    <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
    <script>

        let fullUrlNoParams = "{{ $fullUrlNoParams }}";
        
        $(function () {
            $('#blog_filter').on("change", function () {
        
                let tag = $("#blog_filter").val();

                if(tag) {
                    let url = "";
                    url = fullUrlNoParams + '?tag=' + tag;
                    location.href = url;
                }
             
                return false;
            });
        });
    </script>
@endsection