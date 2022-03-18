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
                    <span>Chính sách bảo mật</span>
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
                    <h3>Chính sách bảo mật</h3>
                </div>
                <div class="about__main-content">
                    <p>Chính sách bảo mật này nhằm giúp Quý khách hiểu về cách website thu thập và sử dụng thông tin cá nhân của mình thông qua việc sử dụng trang web, bao gồm mọi thông tin có thể cung cấp thông qua trang web khi Quý khách đăng ký tài khoản, đăng ký nhận thông tin liên lạc từ chúng tôi, hoặc khi Quý khách mua sản phẩm, dịch vụ, yêu cầu thêm thông tin dịch vụ từ chúng tôi.</p>
                    <p>Chúng tôi sử dụng thông tin cá nhân của Quý khách để liên lạc khi cần thiết liên quan đến việc Quý khách sử dụng website của chúng tôi, để trả lời các câu hỏi hoặc gửi tài liệu và thông tin Quý khách yêu cầu.</p>
                    <p>Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất để bảo vệ thông tin cũng như việc thanh toán của khách hàng. </p>
                    <p>Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan pháp luật yêu cầu.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection