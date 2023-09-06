<ul class="justify-content-center">
    @if ($paginator->onFirstPage())
        <li class="disabled"><span>&laquo;</span></li>
    @else
        <li><a href="{{ $posts->withQueryString()->previousPageUrl() }}" rel="prev">&laquo;</a></li>
    @endif

    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="disabled">{{ $element }}</li>
        @endif

        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active"><a href="#">{{ $page }}</a></li>
                @else
                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif

        {{-- @foreach ($posts as $page => $post)
            <li><a href="{{ $post }}">{{ $page }}</a></li>
        @endforeach --}}

        @if ($posts->hasMorePages())
            <li><a href="{{ $posts->nextPageUrl() }}" rel="next">&raquo;</a></li>
        @else
            <li class="disabled"><span>&raquo;</span></li>
        @endif
    @endforeach

</ul>


{{-- @if ($paginator->onFirstPage())
    <li class="disabled"><span>← Previous</span></li>
@else
    <li>
        <a class="pgn__prev" href="{{ $articles->withQueryString()->previousPageUrl() }}">Prev</a>
    </li>
@endif --}}

{{-- <ul class="justify-content-center">



@foreach ($elements as $element)
@if (is_string($element))
    <li class="disabled">{{ $element }}</li>
@endif

@if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
            <li class="active"><a href="#">{{ $page }}</a></li>
                <li class="active my-active"><span>{{ $page }}</span></li>
            @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach
    @endif

  </ul> --}}


{{-- @foreach ($elements as $element) --}}
{{-- @if (is_string($element))
        <li class="disabled"><span>{{ $element }}</span></li>
    @endif --}}



{{-- @if (is_array($element))
        @foreach ($element as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="active my-active"><span>{{ $page }}</span></li>
            @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach
    @endif --}}
{{-- @endforeach --}}



{{-- @if ($paginator->hasMorePages())
    <li>
        <a href="{{ $articles->withQueryString()->nextPageUrl() }}">Next</a>
    </li>
@else
    {{-- <li class="disabled"><span>Next</span></li>
@endif --}}
