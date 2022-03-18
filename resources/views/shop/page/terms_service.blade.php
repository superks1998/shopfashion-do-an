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
                    <span>Điều khoản dịch vụ</span>
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
                            <li><a href="./search">Tìm kiếm</a></li>
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
                    <h3>Điều khoản dịch vụ</h3>
                </div>
                <div class="about__main-content">
                    <p>
                        <strong>1. Giới thiệu</strong>
                    </p>
                    <p>
                        Chào mừng quý khách hàng đến với website chúng tôi.
                    </p>
                    <p>
                        Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.
                    </p>
                    <p>
                        Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.
                    </p>
                    <p>
                        <strong>2. Hướng dẫn sử dụng website</strong>
                    </p>
                    <p>
                        Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.
                    </p>
                    <p>
                        Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.
                    </p>
                    <p>
                        <strong>3. Thanh toán an toàn và tiện lợi</strong>
                    </p>
                    <p>
                        Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:
                    </p>
                    <p>
                        <span>
                            <strong>
                                <u>Cách 1:</u>
                            </strong>
                            Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán).
                        </span>
                        <br>
                        <span>
                            <strong>
                                <u>Cách 2:</u>
                            </strong>
                            Thanh toán sau (COD – giao hàng và thu tiền tận nơi).
                        </span>
                        <br>
                        <span>
                            <strong>
                                <u>Cách 3:</u>
                            </strong>
                            Thanh toán online qua thẻ tín dụng, chuyển khoản.
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection