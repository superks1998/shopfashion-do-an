@foreach($categories as $category)
<li class="submenu2__level1"><a href="/danh-muc/{{ $category->slug }}">{{ $category->name ?? '' }}</a>
    <span class="icon__subnav">
        <i class="fa fa-angle-down"></i>
    </span>
    @if(!empty($category->categoryChildrent))
    <ul class="submenu2 subnav__child">
        @foreach($category->categoryChildrent as $c)
            <li><a href="/danh-muc/{{ $c->slug }}">{{ $c->name ?? '' }}</a></li>
        @endforeach
    </ul>
    @endif
</li>
@endforeach
