@if ($paginator->hasPages())
    <ul class="pagination">
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="pagination__item"><span>...</span></li>
            @endif
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="pagination__item"><a>{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}" class="pagination__item">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="pagination__item"><a href="{{ $paginator->nextPageUrl() }}"><i class="fas fa-angle-double-right"></i></a></li>
            @endif
        @endforeach
    </ul>
@endif
