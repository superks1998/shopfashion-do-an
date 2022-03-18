
@extends('shop.layouts.master')

@section('content')
    <div class="breadcrumb">
        <div class="row no-gutters">
            <div class="col l-12 m-12 c-12">
                <ul class="breadcrumb__link">
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li>
                        <a href="{{ request()->fullUrl() }}">{{ $category->name ?? 'Danh mục' }}</a>
                    </li>
                    <li>
                        <span>Tất cả sản phẩm</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="collection" style="padding: 0 15px">
        <div class="collection__heading row no-gutters">
            <div class="col l-8 m-8 c-12">
                <div class="collection__heading-title">
                    <h2>{{ $category->name }}</h2>
                </div>
                @if($products->isEmpty())
                    <p>Không có sản phầm</p>
                @endif
            </div>
            <div class="col l-4 m-4 c-12">
                <div class="collection__heading-sort">
                    <i class="fa fa-angle-down"></i>
                    <form method="get">
                        <select class="sort__dropdown-select" id="select_search" name="sort_by">
                            <option value="price-ascending" {{ request()->sort_by === 'price-ascending' ? 'selected' : '' }}>Giá: Tăng dần</option>
                            <option value="price-descending" {{ request()->sort_by === 'price-descending' ? 'selected' : '' }}>Giá: Giảm dần</option>
                            <option value="title-ascending" {{ request()->sort_by === 'title-ascending' ? 'selected' : '' }}>Tên: A-Z</option>
                            <option value="title-descending" {{ request()->sort_by === 'title-descending' ? 'selected' : '' }}>Tên: Z-A</option>
                            <option value="created-ascending" {{ request()->sort_by === 'created-ascending' ? 'selected' : '' }}>Cũ nhất</option>
                            <option value="created-descending" {{ request()->sort_by === 'created-descending' ? 'selected' : '' }}>Mới nhất</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col l-2-4 m-4 c-6">
                    <div class="collection__product">
                        <a class="collection__product-img" href="{{route('shop.product', ['id' => $product->id])}}">
                            <img src="{{ $product->feature_image_before }}" alt="{{ $product->name }}">
                            <img src="{{ $product->feature_image_after }}" alt="{{ $product->name }}">
                        </a>
                        @if ($product->sale)
                            <div class="collection__product-discount">
                                <span>-{{$product->sale ?? 0}}%</span>
                            </div>
                        @endif
                        <div class="collection__product-details">
                            <div class="details__name">
                                <a href="{{ route('shop.product', ['id' => $product->id]) }}">{{ $product->name ?? '' }}</a>
                            </div>
                            <div class="details__price highlight">
                                @if ($product->sale)
                                    <span>{{number_format(number_price($product->price, $product->sale))}}₫</span>
                                    <span class="details__price-del">
                                <del>{{number_format($product->price)}}₫</del>
                            </span>
                                @else
                                    <div class="details__price">
                                        <span>{{ number_format($product->price) }}₫</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{ $products->links('shop.pagination.pagination') }}
@endsection

@push('scripts')
    <script>
        $('#select_search').on('change', function(e){
            this.form.submit()
        });
    </script>
@endpush
