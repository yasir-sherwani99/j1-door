@extends('layouts.guest')

@section('content')

    @include('guest.inc.banner_main', ['title' => 'Blogs', 'new_class' => 'blog-sec-banner'])

    <!-- need-sec -->
    <section class="need-sec">
        <div class="container container-small">
            @include('guest.inc.breadcrumbs', ['section' => 'Blogs'])
            @include('guest.inc.filter_blog')
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blog-card.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                Garage Door Replacement Returns to Top Spot on Cost Versus Value Report
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                A garage door replacement receives an unprecedented 194% average return on
                                investment nationally, according to Remodeling Magazine’s 2024 Cost vs. Value
                                Report
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Case Study</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-2.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                Garage Door Replacement: Over 102% Return on Investment
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                Garage door replacements received a 100% ROI rating for home improvement
                                projects. Learn how a new garage door could boost your homes ROI!
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Garage Door Tips</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-3.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                ​Chip & Pauli Wade Create Mountaintop Retreat
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                HGTV & DIY Network Hosts partner with Overhead Door™ brand to create their
                                stunning Mountaintop Retreat!
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Featured In</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-4.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                Garage Door Replacement Returns to Top Spot on Cost Versus Value Report
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                A garage door replacement receives an unprecedented 194% average return on
                                investment nationally, according to Remodeling Magazine’s 2024 Cost vs. Value
                                Report
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Case Study</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-5.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                Garage Door Replacement: Over 102% Return on Investment
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                Garage door replacements received a 100% ROI rating for home improvement
                                projects. Learn how a new garage door could boost your homes ROI!
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Garage Door Tips</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-6.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                ​Chip & Pauli Wade Create Mountaintop Retreat
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                HGTV & DIY Network Hosts partner with Overhead Door™ brand to create their
                                stunning Mountaintop Retreat!
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Featured In</h6>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-7.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                Garage Door Replacement Returns to Top Spot on Cost Versus Value Report
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                A garage door replacement receives an unprecedented 194% average return on
                                investment nationally, according to Remodeling Magazine’s 2024 Cost vs. Value
                                Report
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Case Study</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-8.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                Garage Door Replacement: Over 102% Return on Investment
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                Garage door replacements received a 100% ROI rating for home improvement
                                projects. Learn how a new garage door could boost your homes ROI!
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Garage Door Tips</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-9.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                ​Chip & Pauli Wade Create Mountaintop Retreat
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                HGTV & DIY Network Hosts partner with Overhead Door™ brand to create their
                                stunning Mountaintop Retreat!
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Featured In</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-10.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                Garage Door Replacement Returns to Top Spot on Cost Versus Value Report
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                A garage door replacement receives an unprecedented 194% average return on
                                investment nationally, according to Remodeling Magazine’s 2024 Cost vs. Value
                                Report
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Case Study</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-11.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                Garage Door Replacement: Over 102% Return on Investment
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                Garage door replacements received a 100% ROI rating for home improvement
                                projects. Learn how a new garage door could boost your homes ROI!
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Garage Door Tips</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogscard position-relative">
                        <img src="{{ asset('images/blogs/blogcard-12.png') }}" alt="" />
                        <div class="text-blog">
                            <h5 class="font-20 font-weight-sbold mb-2">
                                ​Chip & Pauli Wade Create Mountaintop Retreat
                            </h5>
                            <p class="font-16 font-weight-medium mb-4 textgry">
                                HGTV & DIY Network Hosts partner with Overhead Door™ brand to create their
                                stunning Mountaintop Retreat!
                            </p>

                            <h6 class="font-14 font-weight-sbold position-absolute">Featured In</h6>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="mt-5" aria-label="Page navigation example">
                <ul class="pagination custom-pagination">
                    <li class="page-item previous">
                        <a class="page-link p-0 border-0" href="#" aria-label="Previous">
                            <img src="{{ asset('images/svg/back.svg') }}" alt="" />
                        </a>
                    </li>
                    <div class="page-items-container">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                        <li class="page-item"><a class="page-link" href="#">9</a></li>
                        <li class="page-item"><a class="page-link" href="#">10</a></li>
                    </div>
                    <li class="page-item next">
                        <a class="page-link p-0 border-0" href="#" aria-label="Next">
                            <img src="{{ asset('images/svg/next.svg') }}" alt="" />
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    @include('guest.inc.testimonial')

@endsection