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
                    <span>Chính sách đổi trả</span>
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
                    <h3>Chính sách đổi trả</h3>
                </div>
                <div class="about__main-content">
                    <p>
                        <strong>1. Điều kiện đổi trả</strong>
                    </p>
                    <p>
                        Quý Khách hàng cần kiểm tra tình trạng hàng hóa và có thể đổi hàng/ trả lại hàng ngay tại thời điểm giao/nhận hàng trong những trường hợp sau:
                    </p>
                    <ul>
                        <li>
                            <p>Hàng không đúng chủng loại, mẫu mã trong đơn hàng đã đặt hoặc như trên website tại thời điểm đặt hàng.</p>
                        </li>
                        <li>
                            <p>Không đủ số lượng, không đủ bộ như trong đơn hàng.</p>
                        </li>
                        <li>
                            <p>Tình trạng bên ngoài bị ảnh hưởng như rách bao bì, bong tróc, bể vỡ…</p>
                        </li>
                    </ul>
                    <p>Khách hàng có trách nhiệm trình giấy tờ liên quan chứng minh sự thiếu sót trên để hoàn thành việc hoàn trả/đổi trả hàng hóa. </p>
                    <p>
                        <strong>2. Quy định về thời gian thông báo và gửi sản phẩm đổi trả</strong>
                    </p>
                    <ul>
                        <li>
                            <p>
                                <strong>Thời gian thông báo đổi trả:</strong>
                                trong vòng 48h kể từ khi nhận sản phẩm đối với trường hợp sản phẩm thiếu phụ kiện, quà tặng hoặc bể vỡ.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Thời gian gửi chuyển trả sản phẩm:</strong>
                                trong vòng 14 ngày kể từ khi nhận sản phẩm.
                            </p>
                        </li>
                        <li>
                            <p>
                                <strong>Địa điểm đổi trả sản phẩm:</strong>
                                Khách hàng có thể mang hàng trực tiếp đến văn phòng/ cửa hàng của chúng tôi hoặc chuyển qua đường bưu điện.
                            </p>
                        </li>
                    </ul>
                    <p>Trong trường hợp Quý Khách hàng có ý kiến đóng góp/khiếu nại liên quan đến chất lượng sản phẩm, Quý Khách hàng vui lòng liên hệ đường dây chăm sóc khách hàng của chúng tôi.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection