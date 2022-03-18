@extends('shop.layouts.master')
@section('content')
<div class="breadcrumb">
    <div class="row no-gutters">
        <div class="col l-12 m-12 c-12">
            <ul class="breadcrumb__link">
                <li>
                    <a href="./index.html">Trang chủ</a>
                </li>
                <li>
                    <span>Giới thiệu</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="about__us">
    <div class="row">
        <div class="col l-3 m-12 c-12">
            <div class="about__sidebar">
                <div class="group__menu">
                    <div class="group__menu-title">
                        <h5>Danh mục trang</h5>
                    </div>
                    <div class="group__menu-category">
                        <ul class="tree__menu">
                            <li><a href="/search">Tìm kiếm</a></li>
                            <li><a href="/gioi-thieu">Giới thiệu</a></li>
                            <li><a href="/chinh-sach-doi-tra">Chính sách đổi trả</a></li>
                            <li><a href="/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                            <li><a href="/dieu-khoan-dich-vu">Điều khoản dịch vụ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="about__us-banner hide-on-tablet-mobile">
                    <a href="/">
                        <img src="{{asset('shop/assets/image/about_banner.jpg')}}" alt="Banner">
                    </a>
                </div>
            </div>
        </div>
        <div class="col l-9 m-12 c-12">
            <div class="about__main">
                <div class="about__main-heading">
                    <h3>Giới thiệu</h3>
                </div>
                <div class="about__main-content">
                    <p>
                        <strong>1. Thông tin cửa hàng</strong>
                    </p>
                    <p>
                        Kleino KLEINO là thương hiệu Local Brand được thành lập năm 2019 tại Hà Nội.
                    </p>
                    <p>
                        Style chủ đạo của chúng tôi là xu hướng Streetwear phá cách, không tuân thủ theo bất kỳ quy luật nào. Sản phẩm của chúng tôi được đầu tư lớn về thiết kế, chất liệu cũng như dịch vụ đi kèm.
                    </p>
                    <p>
                        <strong>2. Thông tin liên hệ</strong>
                    </p>
                    <ul>
                        <li>
                            <p>Địa chỉ của chúng tôi</p>
                            <p>
                                <strong>Số 11 Phố Huế - Hoàn Kiếm _ Hà Nội</strong>
                            </p>
                        </li>
                        <li>
                            <p>Email của chúng tôi</p>
                            <p>
                                <strong>kleino.shop@gmail.com</strong>
                            </p>
                        </li>
                        <li>
                            <p>Điện thoại</p>
                            <p>
                                <strong>0123456789</strong>
                            </p>
                        </li>
                        <li>
                            <p>Thời gian làm việc</p>
                            <p>
                                <strong>Tất cả các ngày trong tuần từ 9h30-21h30</strong>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection