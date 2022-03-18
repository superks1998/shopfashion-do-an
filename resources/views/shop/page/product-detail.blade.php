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
                    <a href="/san-pham">Sản phẩm mới</a>
                </li>
                <li>
                    <span>{{ $product->name ?? '' }}</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="product__details">
    <div class="row">
        <div class="col l-8 m-12 c-12">
            <div class="product__gallery">
                <div class="product__gallery-thumbs-wrap hide-on-tablet-mobile">
                    <div class="product__gallery-thumbs">
                            <div class="product__gallery-thumb active">
                                <img src="{{ $product->feature_image_before ?? '' }}"  onclick="changeImageDetail('thumb-one')" id="thumb-one" alt="">
                            </div>
                            <div class="product__gallery-thumb">
                                <img src="{{ $product->feature_image_after ?? '' }}"  onclick="changeImageDetail('thumb-two')" id="thumb-two" alt="">
                            </div>
                    </div>
                </div>

                <div class="product__image-detail">
                    <img class="hide-on-tablet-mobile" src="" alt="" id="img-detail">
                    <div class="product__image-slider image__main hide-on-pc">
                        @foreach($product->images as $img)
                            <div class="product__image-slider-item">
                                <img src="{{ $img->image_path ?? '' }}" alt="">
                            </div>
                        @endforeach
                    </div>

                    <div class="product__image-button">
                        <div class="product__zoom-in">
                            <span class="zoom-in" aria-hidden="true">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 36 36" style="enable-background:new 0 0 36 36; width: 30px; height: 30px;" xml:space="preserve">
                                    <polyline points="6,14 9,11 14,16 16,14 11,9 14,6 6,6 "></polyline>
                                    <polyline points="22,6 25,9 20,14 22,16 27,11 30,14 30,6 "></polyline>
                                    <polyline points="30,22 27,25 22,20 20,22 25,27 22,30 30,30 "></polyline>
                                    <polyline points="14,30 11,27 16,22 14,20 9,25 6,22 6,30 "></polyline>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col l-4 m-12 c-12">
            <div class="product__description">
                <div class="product__title">
                    <h1>{{ $product->name ?? '' }}</h1>
                    <span id="pro__code">SKU: {{ $product->sku ?? '' }}</span>
                </div>
                <div class="product__price">
                    @if($product->sale)
                        <span class="sale">-{{ $product->sale }}%</span>
                        <span class="price">{{number_format(number_price($product->price, $product->sale))}}₫</span>
                        <del>{{number_format($product->price)}}₫</del>
                    @else
                        <span class="price">{{number_format($product->price)}}₫</span>
                    @endif
                </div>
                <div class="product__swatch">
                    <div class="swatch__title">
                        <span>SIZE</span>
                    </div>
                    <div class="swatch__wrap">
                        <div class="swatch__element">
                            <input id="swatch-s product_size" name="product_size" type="radio" value="S" checked>
                            <label for="swatch-s" class="sd">
                                <span>S</span>
                            </label>
                        </div>
                        <div class="swatch__element">
                            <input id="swatch-m product_size" type="radio" name="product_size" value="M" >
                            <label for="swatch-m" class="">
                                <span>M</span>
                            </label>
                        </div>
                        <div class="swatch__element">
                            <input id="swatch-l product_size" type="radio" name="product_size" value="L">
                            <label for="swatch-l" class="">
                                <span>L</span>
                            </label>
                        </div>
                        <div class="swatch__element">
                            <input id="swatch-xl product_size" type="radio" name="product_size" value="XL">
                            <label for="swatch-xl" class="">
                                <span>XL</span>
                            </label>
                        </div>
                    </div>

                    <div class="product__quantity">
                        <input type="button" value="-" onclick="minusQuantity()" class="quantity__btn">
                        <input type="text" name="quantity" value="1" min="1" class="quantity__selector">
                        <input type="button" value="+" onclick="plusQuantity()" class="quantity__btn">
                    </div>

                    <div class="product__addcart">
                        <a class="button dark btn__addcart add_to_cart" data-url="{{route('add.cart', ['id' => $product->id])}}">Thêm vào giỏ</a>
                    </div>

                    <div class="product__action-bottom hide-on-pc hide-on-tablet">
                        <div class="bottom__input">
                            <input type="number" value="1" min="1">
                        </div>
                        <a class="btn__add cart-bottom button dark" data-url="{{route('add.cart', ['id' => $product->id])}}">Thêm vào giỏ</a>
                    </div>
                </div>
                <ul class="product__description-content">
                    <div class="title">Mô tả</div>
                    <li>- Chất liệu: 100% COTTON</li>
                    <li>– Phom: Regular</li>
                    <li>– Màu: Đen</li>
                    <li>– Size: S – M – L – XL</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<x-shop.related-products :product="$product"/>

<div class="divzoom">
    <div class="divzoom__main">
        <div class="product__thumb">
            <img src="{{ $product->feature_image_before ?? '' }}" onclick="changeImageDetail('thumb-one')" id="thumb-one" alt="">
        </div>
        <div class="product__thumb">
            <img src="{{ $product->feature_image_after ?? '' }}" onclick="changeImageDetail('thumb-two')" id="thumb-two" alt="">
        </div>
    </div>
    <div class="divzoom__close btn__close">
        <span></span>
    </div>
</div>
@endsection

@push('scripts')
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endpush
