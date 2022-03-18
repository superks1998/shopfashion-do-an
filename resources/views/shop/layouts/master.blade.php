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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="{{asset('shop/owlcarousel/assets/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/owlcarousel/assets/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/grid.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/base.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/product__details.css')}}">
    <link rel="stylesheet" href="{{asset('shop/assets/css/reponsive.css')}}">
    <title>Fashion</title>
    @stack('css')
</head>
<body>
    <div class="app">
        <!--================ Header Menu Area =================-->
        @include('shop.components.header')
        <div class="app__container">
            <div class="grid">
                <div class="container">
                    @if(request()->url() === route('index'))
                        <!-- ================ Banner.blade.php area ================= -->
                        <x-shop.banner />
                    @endif
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!--================ Footer Area  =================-->
    @include('shop.components.footer')

<div class="site__overlay"></div>
@include('shop.components.site-nav')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="{{asset('shop/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="{{asset('shop/app.js')}}"></script>
<script src="{{asset('shop/js/index.js')}}"></script>
<script src="{{asset('shop/js/product.js')}}"></script>
<script>
    $(function () {
        $(".keyword_search").keyup(function () {
            let keyword = $(this).val();
            if (keyword !== '') {
                $.ajax({
                    url: '/autocomplete',
                    method: 'GET',
                    data: {
                        keyword
                    }
                }).then( data => {
                    $(".result__content").empty()
                    $(".result__content").html(data)
                })
            }
        })
    })
</script>
@stack('scripts')
</body>
</html>
