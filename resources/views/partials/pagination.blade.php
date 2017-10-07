@if ( $paginator->hasPages() )
    <div class="btn-group">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <button class="btn btn-white disabled" type="button"><i class="fa fa-chevron-left"></i></button>
        @else
            <a class="btn btn-white" href="{{ $paginator->previousPageUrl() }}" type="button"><i
                        class="fa fa-chevron-left"></i></a>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <button class="btn btn-white disabled"><span>{{ $element }}</span></button>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <button class="btn btn-white active"><span>{{ $page }}</span></button>
                    @else
                        <a href="{{ $url }}" class="btn btn-white">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-white" type="button"><i
                        class="fa fa-chevron-right"></i> </a>
        @else
            <button class="btn btn-white disabled" type="button"><i class="fa fa-chevron-right"></i></button>
        @endif
    </div>
@endif