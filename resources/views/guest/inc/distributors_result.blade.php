<section class="map-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4 class="mb-4">Search Results</h4>
                @if(isset($distributors) && count($distributors) > 0)
                    @foreach($distributors as $dist)
                        <div class="map-sec-text-holder border position-relative mb-4">
                            <div class="d-flex justify-content-end">
                                @if($dist->category == "both")
                                    <div class="text-end location-card-home">
                                        <div class="location-card__home d-flex align-items-center">
                                            <h6 class="font-12 font-weight-bold position-relative border-1">Residential</h6>
                                            <img src="{{ asset('images/svg/home-icon-2.svg') }}" class="location-card__icon mx-2" />
                                        </div>
                                    </div>
                                    <div class="text-end location-card">
                                        <div class="location-card__type d-flex align-items-center ms-1">
                                            <h6 class="font-12 font-weight-bold position-relative">Commercial</h6>
                                            <img src="{{ asset('images/svg/commercial-icon-2.svg') }}" class="location-card__icon mx-2" />
                                        </div>
                                    </div>
                                @elseif($dist->category == "commercial")
                                    <div class="text-end location-card">
                                        <div class="location-card__type d-flex align-items-center ms-1">
                                            <h6 class="font-12 font-weight-bold position-relative">Commercial</h6>
                                            <img src="{{ asset('images/svg/commercial-icon-2.svg') }}" class="location-card__icon mx-2" />
                                        </div>
                                    </div>
                                @else
                                    <div class="text-end location-card-home">
                                        <div class="location-card__home d-flex align-items-center">
                                            <h6 class="font-12 font-weight-bold position-relative">Residential</h6>
                                            <img src="{{ asset('images/svg/home-icon-2.svg') }}" class="location-card__icon mx-2" />
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="map-text-holder">
                                <div class="row">
                                    <div class="col-lg-2">
                                        <img src="{{ asset('images/svg/location-icon-2.svg') }}" class="location-icon" />
                                        <p class="font-20">12.2</p>
                                        <p class="font-22 font-weight-medium">Miles</p>
                                    </div>
                                    <div class="col-lg-10">
                                        <h3 class="font-20 font-weight-bold mb-3">
                                            {{ $dist->name }}<sup>™</sup>
                                        </h3>
                                        <p class="font-16 mb-3">{{ $dist->address }}</p>
                                        <div class="mb-3">
                                            @if(isset($dist->phone))
                                                <p class="text-dark font-weight-sbold mb-2">
                                                    <a href="tel:{{ $dist->phone }}" class="text-dark">
                                                        <img src="{{ asset('images/svg/telephone-icon.svg') }}" class="location-card__icon" />
                                                        {{ $dist->phone }}
                                                    </a>
                                                </p>
                                            @endif
                                            @if(isset($dist->website))
                                                <p class="text-dark font-weight-sbold mb-2">
                                                    <a
                                                        href="{{ $dist->website }}"
                                                        class="text-dark font-weight-sbold mb-1"
                                                        target="_blank"
                                                    >
                                                        <img src="{{ asset('images/svg/world-icon.svg') }}" class="location-card__icon" />
                                                        View Website
                                                    </a>
                                                </p>
                                            @endif
                                        </div>
                                        <p class="font-16">
                                            {!! \Str::limit($dist->description, 50) !!}
                                        </p>
                                        <div class="d-flex btn-holder mt-3">
                                            <a href="#" class="btn btn-solid me-3 big-btn font-13 px-3">
                                                Location Details</a
                                            >
                                            <a href="{{ route('guest.quote.index') }}" class="btn btn-solid btn-black text-white big-btn font-13 px-3">
                                                Request a quote
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif                
            </div>
            <div class="col-lg-8">
                <div class="map-img">
                    <!-- <img src="{{ asset('images/others/map-sec.png') }}" alt="J1 Door" /> -->
                    <iframe 
                        class="w-100" 
                        height="850" 
                        frameborder="0" 
                        scrolling="no" 
                        marginheight="0" 
                        marginwidth="0" 
                        id="gmap_canvas" 
                        src="https://maps.google.com/maps?width=520&height=400&hl=en&q=789%20Queensberry%20Street%20Melbourne%20+(J1%20Door%20Company)&t=&z=12&ie=UTF8&iwloc=B&output=embed"
                    >
                    </iframe> 
                    <a href='https://www.easybooking.eu/'>easybooking Hotelsoftware</a> 
                    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=0d7cfbdef0ab5b4493a1673aa0dba079b0ee120a'></script>
                </div>
            </div>
        </div>
    </div>
</section>