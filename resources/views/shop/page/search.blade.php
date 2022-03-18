@extends('shop.layouts.master')

@section('content')
    <div class="app__container">
        <div class="grid">
            <div class="container">

                <div class="search">
                    <div class="search__header">
                        <h1 class="title">Tìm kiếm</h1>
                        <p class="count__cart">
                            Có
                            <span>{{$products->count()}} sản phẩm</span>
                            cho tìm kiếm
                        </p>
                    </div>
                    <p class="search__result-text">
                        Kết quả tìm kiếm cho
                        <strong>"{{ $keyword  }}"</strong>
                    </p>
                </div>
                <div class="collection">
                    <div class="row">
                        @foreach($products as $product)
                            <div class="col l-2-4 m-4 c-6">
                                <div class="collection__product">
                                    <a class="collection__product-img"
                                       href="{{route('shop.product', ['id' => $product->id])}}">
                                        <img src="{{ $product->feature_image_before }}" alt="{{ $product->name }}">
                                        <img src="{{ $product->feature_image_after }}" alt="{{ $product->name }}">
                                    </a>
                                    <div class="collection__product-discount">
                                        <span>-{{$product->sale ?? 0}}%</span>
                                    </div>
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

                    {{ $products->links('shop.pagination.pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
