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
                    <span>Hiển thị thông tin đơn hàng
                            <i class="fas fa-angle-down"></i>
                        </span>
                </div>
                <div class="order__info-price">249,000₫</div>
            </div>
            <div class="checkouts__main">
                <div class="main__header">
                    <a href="/" class="main__header-logo hide-on-tablet-mobile">
                        <h2>Kleino</h2>
                    </a>
                </div>
                <div class="main__content">
                    <div class="section">
                        <div class="checkouts__success">
                            <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000" stroke-width="2" class="checkouts__success-icon"><path class="checkmark_circle" d="M25 49c13.255 0 24-10.745 24-24S38.255 1 25 1 1 11.745 1 25s10.745 24 24 24z"></path><path class="checkmark_check" d="M15 24.51l7.307 7.308L35.125 19"></path></svg>
                            <div class="checkouts__success-title">
                                <h3>Đặt hàng thành công</h3>
                            </div>
                            <span class="checkouts__success-title">
                                    Cảm ơn bạn đã mua hàng
                                </span>
                        </div>
                        <div class="checkouts__info">
                            <h4>Thông tin đơn hàng</h4>
                            <h5>Thông tin giao hàng</h5>
                            <span class="checkouts__username">
                                    {{ $transaction->name ?? '' }}
                                </span>
                            <br />
                            <span class="checkouts__address">
                                 {{$transaction->address ?? ''}}
                                </span>
                            <p>Phương thức thanh toán</p>
                            <span class="checkouts__payment">
                                    {{$transaction->getType($transaction->type)['name']}}
                                </span>
                        </div>
                        <div class="section__footer">
                            <a href="/" class="previous__link">
                                <svg class="previous__link-icon" xmlns="http://www.w3.org/2000/svg" width="6.7" height="11.3" viewBox="0 0 6.7 11.3"><path d="M6.7 1.1l-1-1.1-4.6 4.6-1.1 1.1 1.1 1 4.6 4.6 1-1-4.6-4.6z"></path></svg>
                                Cần hỗ trợ
                            </a>
                            <a href="/" class="btn__checkouts">
                                Tiếp tục mua hàng
                            </a>
                        </div>
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
