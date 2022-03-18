@foreach($categories as $category)
<li><a href="/danh-muc/{{ $category->slug }}">{{ $category->name ?? '' }}<i class="fas fa-angle-right"></i></a>
    @if(!empty($category->categoryChildrent))
    <ul class="submenu">
        @foreach($category->categoryChildrent as $c)
            <li><a href="/danh-muc/{{ $c->slug }}">{{ $c->name ?? '' }}</a></li>
        @endforeach
    </ul>
    @endif
</li>
@endforeach
