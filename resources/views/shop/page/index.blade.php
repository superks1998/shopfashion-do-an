@extends('shop.layouts.master')

@section('content')
<div class="collection">
    <div class="row">
        <div class="col l-12 m-12 c-12">
            <div class="collection__title">
                <h2><a href="">Sản phẩm bán chạy</a></h2>
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
@endsection
