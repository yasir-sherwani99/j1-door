<div class="filter-sidebar">
    <div class="header-filter">
        <h4 class="font-weight-sbold font-32">Filter by:</h4>
        <p class="font-16">Selecting options below will change the products displayed.</p>
    </div>

    <div class="accordion filteraccordion border-0" id="accordionExample">
        <div class="accordion-item bg-transparent">
            <h2 class="accordion-header border-0 bg-transparent" id="headingOne">
                <button
                    class="accordion-button border-0 bg-transparent shadow-none font-weight-sbold font-20"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                    Commercial
                </button>
            </h2>
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body border-0 bg-transparent filter-accordion-body">
                    @foreach($commericalFilters as $key => $filter)
                        <div class="form-check mb-3">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                id="filter-{{ $filter->id }}" 
                                name="category"
                                value="{{ $filter->id }}" 
                                @for($i = 0; $i < count($cats); $i++)
                                   {{ $cats[$i] == $filter->id ? 'checked' : '' }}
                                @endfor
                            />
                            <label class="form-check-label font-14" for="filter-{{ $filter->id }}" style="cursor: pointer !important;">
                                {{ $filter->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="accordion-item bg-transparent">
            <h2 class="accordion-header border-0 bg-transparent" id="headingOne">
                <button
                    class="accordion-button border-0 bg-transparent shadow-none font-weight-sbold font-20"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapseOne"
                    aria-expanded="true"
                    aria-controls="collapseOne"
                >
                    Residential
                </button>
            </h2>
            <div
                id="collapseOne"
                class="accordion-collapse collapse show"
                aria-labelledby="headingOne"
                data-bs-parent="#accordionExample"
            >
                <div class="accordion-body border-0 bg-transparent filter-accordion-body">
                    @foreach($residentialFilters as $key => $filter)
                        <div class="form-check mb-3">
                            <input 
                                class="form-check-input" 
                                type="checkbox"
                                name="category" 
                                id="filter-{{ $filter->id }}" 
                                value="{{ $filter->id }}" 
                                @for($i = 0; $i < count($cats); $i++)
                                   {{ $cats[$i] == $filter->id ? 'checked' : '' }}
                                @endfor
                            />
                            <label class="form-check-label font-14" for="filter-{{ $filter->id }}" style="cursor: pointer !important;">
                                {{ $filter->name }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="d-grid">
        <button class="btn btn-warning search" type="button">Search</button>
    </div>
</div>