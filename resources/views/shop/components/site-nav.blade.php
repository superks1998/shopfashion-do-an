<div class="site__nav">
    <div class="site__nav-search">
        <div class="site__nav-container">
            <p class="title">Tìm kiếm</p>
            <form action="/search" class="site__nav-form" method="get">
                <input class="site__nav-input keyword_search" name="keyword" type="text" placeholder="Tìm kiếm sản phẩm...">
                <button class="btn__search" type="submit">
                    <svg version="1.1" class="icon__search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                            <path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
                        <rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
                        </svg>
                </button>
            </form>
            <div class="result__content">
                
            </div>
        </div>
    </div>
    <div class="site__nav-cart">
        <div class="site__nav-container">
            <p class="title">Giỏ hàng</p>
            <div class="cart_wrapper">
                <x-shop.cart-detail />
            </div>
        </div>
    </div>
    <div class="site__nav-menu">
        <div class="site__nav-container">
            <p class="title">Menu</p>
            <div class="menu__main">
                <div class="menu__collection">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="/">Trang chủ</a>
                        </li>
                        <li class="menu__item has__sub level0">
                            <a href="/san-pham">
                                Sản phẩm
                            </a>
                            <span class="icon__subnav">
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            <ul class="submenu2 subnav__dad">
                                <x-shop.category-sitenav />
                            </ul>
                        </li>
                        <li class="menu__item">
                            <a href="/san-pham/sale">SALE</a>
                        </li>
                        <li class="menu__item">
                            <a href="">Tin tức</a>
                        </li>
                        <li class="menu__item">
                            <a href="">Giới thiệu</a>
                        </li>
                        <li class="menu__item">
                            <a href="">Liên hệ</a>
                        </li>
                    </ul>
                </div>

                <div class="menu__about">
                    <ul class="menu__link">
                        <li><a href="/search">Tìm kiếm</a></li>
                        <li><a href="/gioi-thieu">Giới thiệu</a></li>
                        <li><a href="/chinh-sach-doi-tra">Chính sách đổi trả</a></li>
                        <li><a href="/chinh-sach-bao-mat">Chính sách bảo mật</a></li>
                        <li><a href="/dieu-khoan-dich-vu">Điều khoản dịch vụ</a></li>
                    </ul>

                    <div class="menu__login">
                            <span class="menu__login-icon">
                                <svg class="icon__account" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                    <g><g id="account-circle">
                                        <path d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,76.5
                                                         c43.35,0,76.5,33.15,76.5,76.5s-33.15,76.5-76.5,76.5c-43.35,0-76.5-33.15-76.5-76.5S211.65,76.5,255,76.5z M255,438.6
                                                         c-63.75,0-119.85-33.149-153-81.6c0-51,102-79.05,153-79.05S408,306,408,357C374.85,405.45,318.75,438.6,255,438.6z"></path>
                                        </g></g>
                                </svg>
                            </span>
                        <span>Tài khoản của bạn</span>
                    </div>
                </div>
            </div>

            <div class="site__nav-bottom">
                <p>
                    Copyright © 2021 Kleino.
                    </br>
                    Powered by
                    <a href="https://www.haravan.com/?utm_campaign=poweredby&utm_medium=haravan&utm_source=onlinestore">
                        Haravan
                    </a>
                </p>
            </div>
        </div>
    </div>
    <div class="site__nav-close btn__close">
        <span></span>
    </div>
</div>
