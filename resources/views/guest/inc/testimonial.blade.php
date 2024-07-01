<section class="testimonail-sec position-relative">
    <div class="container">
        <div class="testimonail-text text-center">
            <h4 class="font-weight-sbold text-white">Testimonials</h4>
            <p class="text-white">People have spoken!</p>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide position-static" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($testimonials as $key => $val)
                    <button
                        type="button"
                        data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="{{ $key }}"
                        aria-current="{{ $key == 0 ? 'true' : '' }}"
                        aria-label="Slide {{ $key + 1 }}"
                        class="{{ $key == 0 ? 'active' : '' }}"
                    >
                        <img 
                            src="{{ asset($val->picture) }}" 
                            alt="J1 Door Company" 
                            class="rounded-circle"
                        />
                    </button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($testimonials as $key => $val)
                    <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                        <div class="carousel-text text-center text-white m-auto w-100">
                            <img 
                                class="w-auto h-auto testicon rounded-circle mb-4" 
                                src="{{ asset($val->picture) }}" 
                                alt="J1 Door Company" 
                            />
                            <p class="font-24">
                                {{ $val->comment }}
                            </p>
                            <h5 class="font-16">{{ $val->name }}</h5>
                            <span class="font-13">{{ $val->designation }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>