<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset('shop/assets/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/product__details.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/reponsive.css')}}">
    <title>Fashion</title>
</head>
<body>
<div class="app">
    <div class="container">
        <div class="checkouts">
            <div class="checkouts__banner hide-on-pc">
                <h2>Kleino</h2>
            </div>
            <div class="order__info-toggle hide-on-pc">
                <div class="order__info-inner">
                    <svg width="20" height="19" xmlns="http://www.w3.org/2000/svg" class="order__info-icon"><path d="M17.178 13.088H5.453c-.454 0-.91-.364-.91-.818L3.727 1.818H0V0h4.544c.455 0 .91.364.91.818l.09 1.272h13.45c.274 0 .547.09.73.364.18.182.27.454.18.727l-1.817 9.18c-.09.455-.455.728-.91.728zM6.27 11.27h10.09l1.454-7.362H5.634l.637 7.362zm.092 7.715c1.004 0 1.818-.813 1.818-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817zm9.18 0c1.004 0 1.817-.813 1.817-1.817s-.814-1.818-1.818-1.818-1.818.814-1.818 1.818.814 1.817 1.818 1.817z"></path></svg>
                    <span>Hi???n th??? th??ng tin ????n h??ng
                            <i class="fas fa-angle-down"></i>
                        </span>
                </div>
                <div class="order__info-price">249,000???</div>
            </div>
            <div class="checkouts__sidebar">
                <div class="sidebar__content">
                    <div class="cart__view">
                        <table class="cart__list">
                            <tbody>
                            @foreach($contents as $content)
                                <tr class="item__1">
                                <td class="img">
                                    <a href="{{route('shop.product', ['id' => $content->id])}}">
                                        <img src="{{ $content->options->image }}" alt="">
                                    </a>
                                </td>
                                <td class="info">
                                    <a class="title" href="{{route('shop.product', ['id' => $content->id])}}">
                                        {{ $content->name }}
                                    </a>
                                    <span class="variant">{{ $content->options->size ?? 'S' }}</span>
                                    <span class="quantity__view">{{ $content->qty }}</span>
                                    <span class="price__view">{{ number_format($content->price) }}???</span>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="line"></div>

                        <div class="section__discount">
                            <form action="" method="POST" class="section__discount-form">
                                <input type="text" name="discount-code" placeholder="M?? gi???m gi??">
                                <button class="discount__btn" disabled>S??? d???ng</button>
                            </form>
                        </div>

                        <div class="line"></div>

                        <table class="checkouts__price">
                            <tbody>
                            <tr>
                                <td class="text__left">
                                    T???m t??nh
                                </td>
                                <td class="text__right">
                                    {{Cart::subtotal()}}???
                                </td>
                            </tr>
                            <td class="text__left">
                                Ph?? v???n chuy???n
                            </td>
                            <td class="text__right">
                                Mi???n ph??
                            </td>
                            </tbody>
                        </table>
                        <div class="line"></div>
                        <table>
                            <tbody>
                            <tr>
                                <td class="text__left">
                                    T???NG TI???N:
                                </td>
                                <td class="text__right">
                                    {{Cart::subtotal()}}???
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="checkouts__main">
                <div class="main__header">
                    <a href="/" class="main__header-logo hide-on-tablet-mobile">
                        <h2>Kleino</h2>
                    </a>
                    <div class="breadcrumb checkouts__breadcrumb hide-on-tablet-mobile">
                        <div class="row no-gutters">
                            <div class="col l-12 m-12 c-12">
                                <ul class="breadcrumb__link">
                                    <li>
                                        <a href="/">Gi??? h??ng</a>
                                    </li>
                                    <li>
                                        <span>Th??ng tin giao h??ng</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main__content">
                    <div class="section">
                        <div class="section__title">
                            <h3>Th??ng tin giao h??ng</h3>
                        </div>
                            @guest('customer')
                                <div class="content__text">
                                    <span>B???n ???? c?? t??i kho???n?</span>
                                    <a href="/dang-nhap">????ng nh???p</a>
                                </div>
                            @endguest
                            <form action="{{route('checkout')}}" method="post" novalidate="novalidate">
                                @csrf
                            <div class="section__fieldset">
                                <div class="fieldset__input">
                                    <input type="text" placeholder="H??? v?? t??n" value="{{ $transaction->name ?? '' }}" name="name">
                                </div>
                                <div class="fieldset__input">
                                    <input type="text" placeholder="S??? ??i???n tho???i" name="phone" value="{{$transaction->phone ?? ''}}" >
                                </div>
                                <div class="fieldset__input">
                                    <input type="text" placeholder="Email" name="email" value="{{$transaction->email ?? ''}}" >
                                </div>
                                <div class="fieldset__input">
                                    <input type="text" placeholder="?????a ch???" name="address" value="{{$transaction->address ?? ''}}">
                                </div>
                            </div>
                            <div class="section__shipping">
                                <div class="section__title">
                                    <h3>Ph????ng th???c v???n chuy???n</h3>
                                </div>
                                <div class="section__content">
                                    <div class="content__box">
                                        <div class="radio__wrapper">
                                            <label class="radio__label" for="shipping__rate">
                                                <div class="radio__input">
                                                    <input id="shipping__rate" class="input-radio" type="radio" checked="">
                                                    <span>Giao h??ng t???n n??i</span>
                                                </div>
                                                <span class="radio__price">0???</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="section__payment">
                                <div class="section__title">
                                    <h3>Ph????ng th???c thanh to??n</h3>
                                </div>
                                <div class="section__content">
                                    <div class="content__box">
                                        <div class="radio__wrapper">
                                            <label class="radio__label" for="payment-method-cod">
                                                <div class="radio__input payment">
                                                    <input id="payment-method-cod" name="type" type="radio" value="1" checked="">
                                                    <span>Thanh to??n khi giao h??ng (COD)</span>
                                                </div>
                                            </label>

                                            <div class="radio__info">
                                                <div class="blank__slate">
                                                    - Kh??ch h??ng ???????c ki???m tra h??ng tr?????c khi nh???n h??ng.
                                                    <br />
                                                    - Mi???n ph?? ship v???i c??c ????n h??ng tr??n 500.000 ??.
                                                </div>
                                            </div>
                                        </div>


                                        <div class="radio__wrapper">
                                            <label class="radio__label" for="payment-method-bank">
                                                <div class="radio__input payment">
                                                    <input id="payment-method-bank" name="type" type="radio" value="2">
                                                    <span>Chuy???n kho???n qua ng??n h??ng</span>
                                                </div>
                                            </label>
                                            <div class="radio__info hidden">
                                                <div class="blank__slate">
                                                    Qu?? kh??ch vui l??ng thanh to??n qua t??i kho???n c??ng ty TNHH ICON AND DENIM s??? 4314767 ng??n h??ng ACB chi nh??nh HCM
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="section__footer">
                            <a href="./cart.html" class="previous__link">
                                <svg class="previous__link-icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3"><path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path></svg>
                                Gi??? h??ng
                            </a>
                                <input name="utf8" type="hidden" value="???">
                                <button type="submit" class="btn__checkouts">
                                    <span class="btn-content">Ho??n t???t ????n h??ng</span>
                                </button>
                        </div>
                            </form>
                    </div>
                </div>
                <div class="main__footer">
                    Powered by Haravan
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script>
    $(".radio__input.payment input")
        .on("click", function(e) {
            $(this).prop("checked", false);
            $(".radio__info").slideUp();
            // console.log($(this).prop("checked"));
            $(".radio__input.payment input:checked").prop("checked", false);
            $(this).prop("checked", true);
            $(this).closest(".radio__label")
                .siblings('.radio__info').slideDown();
        });
    $(".order__info-toggle").on("click", function() {
        $(this).toggleClass("active");
    });
</script>
</body>
</html>
