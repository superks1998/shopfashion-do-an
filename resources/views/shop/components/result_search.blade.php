
@if (!empty($products))
    @foreach($products as $product)
        <div class="result__item">
            <div class="result__item-details">
                <div class="details__name">
                    <a href="{{route('shop.product', ['id' => $product->id])}}">{{ $product->name ?? '' }}</a>
                </div>
                @if ($product->sale)
                    <div class="details__price">
                        <p>{{number_format(number_price($product->price, $product->sale))}}₫</p>
                    </div>
                @else
                    <div class="details__price">
                        <p>{{number_format($product->price)}}₫</p>
                    </div>
                @endif
            </div>
            <div class="result__item-img">
                <a href="">
                    <img src="{{ $product->feature_image_before ?? '' }}" alt="">
                </a>
            </div>
        </div>
    @endforeach
@endif
