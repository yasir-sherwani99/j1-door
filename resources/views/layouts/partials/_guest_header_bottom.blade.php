<div class="bottom-bar-header position-absolute w-100">
    <nav class="navbar navbar-expand-lg navbar-light p-0">
        <div class="container-fluid">
            <a class="navbar-brand me-5" href="{{ url('/') }}"><img src="{{ asset('images/logos/logo.svg') }}" alt="" /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                    <li class="nav-item active">
                        <a href="{{ route('guest.product.search', 'residential') }}" class="nav-link active text-white font-18" aria-current="page">
                            Residential
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('guest.product.search', 'commercial') }}" class="nav-link active text-white font-18" aria-current="page">
                            Commercial
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('guest.services.index') }}" class="nav-link active text-white font-18" aria-current="page">
                            Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active text-white font-18" aria-current="page">
                            Resources
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link active text-white font-18" aria-current="page">
                            Architects
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="{{ route('guest.distributor.index') }}" class="btn-solid btn-header btn font-18">Find a Distributor</a>
                    <!-- <a href="#" class="btn-solid btn-header btn">
                        <img src="{{ asset('images/svg//cart.svg') }}" alt="" />
                    </a> -->
                </div>
            </div>
        </div>
    </nav>
</div>