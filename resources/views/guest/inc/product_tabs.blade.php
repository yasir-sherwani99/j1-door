<section class="product-tab-sec">
    <div class="container">
        <ul class="nav nav-pills product-tab d-inline-flex" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link active"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-home"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                >
                    Overview
                </button>
            </li>
            @if(isset($product->features))
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="pills-feature-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-feature"
                        type="button"
                        role="tab"
                        aria-controls="pills-feature"
                        aria-selected="false"
                    >
                        Features
                    </button>
                </li>
            @endif
            @if(strpos($product->categories->name, 'Residential Garage Doors') !== FALSE)
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="pills-garage-door-designs-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-garage-door-designs"
                        type="button"
                        role="tab"
                        aria-controls="pills-garage-door-designs"
                        aria-selected="false"
                    >
                        Garage Door Designs
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="pills-colors-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-colors"
                        type="button"
                        role="tab"
                        aria-controls="pills-colors"
                        aria-selected="false"
                    >
                        Colors
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="pills-windows-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#pills-windows"
                        type="button"
                        role="tab"
                        aria-controls="pills-windows"
                        aria-selected="false"
                    >
                        Windows & Hardware
                    </button>
                </li>
            @endif
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link"
                    id="pills-document-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-document"
                    type="button"
                    role="tab"
                    aria-controls="pills-document"
                    aria-selected="false"
                >
                    Documents
                </button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div
                class="tab-pane fade show active"
                id="pills-home"
                role="tabpanel"
                aria-labelledby="pills-home-tab"
            >
                <div class="tabs-wrapper">
                    <div class="tabs-deatils-box">
                        <h3 class="font-weight-bold mb-4">Construction</h3>
                        <h5 class="font-20 mb-2 font-weight-sbold">Product Specifications</h5>
                        @if(count($specifications) > 0)
                            @foreach($specifications as $spec)
                                <div class="deatils-slabs font-18 py-2 d-flex flex-wrap">
                                    <h6 class="font-weight-medium font-18 w-25">{{ $spec->spec_name }}</h6>
                                    <p class="font-18 w-75">{{ $spec->spec_details }}</p>
                                </div>
                            @endforeach
                        @else
                            <p class="text-danger">Product specifications not found!</p>
                        @endif
                    </div>
                    <div class="tabs-deatils-box">
                        <h3 class="font-weight-bold">Warranty</h3>
                        <div class="deatils-slabs font-18 py-2">
                            @if(isset($product->warranty))
                                {!! $product->warranty !!}
                            @else
                                <p class="text-danger">Product warranty not found!</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="pills-feature"
                role="tabpanel"
                aria-labelledby="pills-feature-tab"
            >
                <div class="tabs-wrapper">
                    <div class="tabs-deatils-box">
                        <h3 class="font-weight-bold mb-4">Features</h3>
                        {!! $product->features !!}
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="pills-garage-door-designs"
                role="tabpanel"
                aria-labelledby="pills-garage-door-designs-tab"
            >
                <div class="tabs-wrapper">
                    <div class="tabs-deatils-box">
                        <h3 class="font-weight-bold mb-4">Panel Design</h3>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="pills-colors"
                role="tabpanel"
                aria-labelledby="pills-colors-tab"
            >
                <div class="tabs-wrapper">
                    <div class="tabs-deatils-box">
                        <h3 class="font-weight-bold">Colors</h3>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="pills-windows"
                role="tabpanel"
                aria-labelledby="pills-windows-tab"
            >
                <div class="tabs-wrapper">
                    <div class="tabs-deatils-box">
                        <h3 class="font-weight-bold">Windows & Hardware</h3>
                    </div>
                </div>
            </div>
            <div
                class="tab-pane fade"
                id="pills-document"
                role="tabpanel"
                aria-labelledby="pills-document-tab"
            >
                <div class="tabs-wrapper">
                    <div class="tabs-deatils-box">
                        <h3 class="font-weight-bold mb-3">Product Literature(s)</h3>
                        @if(count($documents) > 0)
                            @foreach($documents as $doc)
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" />
                                    <label class="form-check-label font-18" for="flexCheckDefault">
                                    <a href="{{ route('guest.document.download', $doc->id) }}" class="text-dark">{{ $doc->name }}</a>
                                        <i class="far fa-file-pdf ms-2 text-danger"></i>
                                    </label>
                                </div>
                            @endforeach
                        @else
                            <p class="text-danger">No product literature available!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>