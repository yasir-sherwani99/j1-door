@if ($paginator->hasPages())
    <nav aria-label="Page navigation example">
        <ul class="pagination custom-pagination">
            <li class="page-item previous">
                @if ($paginator->onFirstPage())
                    <a class="page-link p-0 border-0 disabled" href="#" aria-label="Previous">
                        <img src="{{ asset('images/svg/back.svg') }}" alt="" />
                    </a>
                @else
                    <a class="page-link p-0 border-0" href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                        <img src="{{ asset('images/svg/back.svg') }}" alt="" />
                    </a>
                @endif
            </li>
            <div class="page-items-container">
                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item"><a class="page-link disabled" href="#">{{ $element }}</a></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active">
                                    <a class="page-link" href="{{ $url }}" aria-current="page">{{ $page }}</a>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach
            </div>
            <li class="page-item next">
                @if ($paginator->hasMorePages())
                    <a class="page-link p-0 border-0" href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                        <img src="{{ asset('images/svg/next.svg') }}" alt="" />
                    </a>
                @else
                    <a class="page-link p-0 border-0 disabled" href="#" aria-label="Next">
                        <img src="{{ asset('images/svg/next.svg') }}" alt="" />
                    </a>
                @endif
            </li>
        </ul>
    </nav>
@endif