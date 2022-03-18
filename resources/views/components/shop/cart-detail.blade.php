<div class="cart__view">
    <table class="cart__list">
        <tbody>
            @foreach($contents as $content )
                <tr class="item__1">
                    <td class="img">
                        <a href="/product/{{$content->id}}">
                            <img src="{{ $content->options->image }}" alt="">
                        </a>
                    </td>
                    <td class="info">
                        <a class="title" href="/product/{{$content->id}}">
                            {{ $content->name ?? '' }}
                        </a>
                        <span class="variant">{{ $content->options->size ?? 'S' }}</span>
                        <span class="quantity__view">{{ $content->qty }}</span>
                        <span class="price__view">{{ number_format($content->price) }}₫</span>
                        <span class="remove__cart">
                            <a href="javascript:void(0)" class="action_delete" data-id="{{$content->rowId}}"
                               data-url="{{ route('delete.cart')}}"
                            >
                                <i class="fa fa-times"></i>
                            </a>
                        </span>
                    </td>
                 </tr>
            @endforeach
        </tbody>
    </table>
    <div class="line"></div>
    <table>
        <tbody>
        <tr>
            <td class="text__left">
                TỔNG TIỀN:
            </td>
            <td class="text__right">
                {{\Cart::subtotal()}}₫
            </td>
        </tr>
        <tr>
            <td>
                <a href="/thanh-toan" class="link__checkout button dark">Thanh toán</a>
            </td>
        </tr>
        </tbody>
    </table>
</div>
