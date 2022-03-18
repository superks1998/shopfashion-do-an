<div class="topbar">
    <p>Miễn phí vận chuyển khi mua từ 2 sản phẩm</p>
</div>
<header class="header">
    <div class="grid">
        <div class="header__mid">
            <div class="row sm-gutter">
                <div class="col l-4 m-0 c-0"></div>
                <div class="col l-4 m-4 c-4">
                    <div class="header__logo">
                        <a href="/">Kleino</a>
                    </div>
                </div>
                <div class="col l-4 m-8 c-8">
                    <div class="header__action">
                        <a class="hide-on-tablet-mobile" href="/account">
                                    <span class="header__action-account">
                                        <svg class="icon__account" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="510px" height="510px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                                            <g><g id="account-circle">
                                                <path d="M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,76.5
                                                                 c43.35,0,76.5,33.15,76.5,76.5s-33.15,76.5-76.5,76.5c-43.35,0-76.5-33.15-76.5-76.5S211.65,76.5,255,76.5z M255,438.6
                                                                 c-63.75,0-119.85-33.149-153-81.6c0-51,102-79.05,153-79.05S408,306,408,357C374.85,405.45,318.75,438.6,255,438.6z"></path>
                                                </g></g>
                                        </svg>
                                    </span>
                        </a>
                        <span class="header__action-search hide-on-tablet-mobile">
                                    <svg version="1.1" class="icon__search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                                        <path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
                                        <rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
                                    </svg>
                                </span>

                        <span class="header__action-cart">
                                    <svg version="1.1" class="icon__cart" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                                        <g>
                                            <path d="M0,6v21h24V6H0z M22,25H2V8h20V25z"></path>
                                        </g>
                                        <g>
                                            <path d="M12,2c3,0,3,2.3,3,4h2c0-2.8-1-6-5-6S7,3.2,7,6h2C9,4.3,9,2,12,2z"></path>
                                        </g>
                                    </svg>
                                    <span class="count__holder">
                                        <span class="count cart_count">{{ \Gloudemans\Shoppingcart\Facades\Cart::count() ?? 0 }}</span>
                                    </span>
                                </span>
                        <span class="header__action-menu hide-on-pc">
                            <span class="bar"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__menu-desktop">
            <div class="row">
                <div class="col l-2">
                    <div class="header__menu-logo">
                        <a href="/">Kleino</a>
                    </div>
                </div>
                <div class="col l-8 m-0 c-0">
                    <nav class="header__navbar">
                        <ul class="header__navbar-list">
                            <li class="header__navbar-item {{ active_menu() }}">
                                <a href="/">Trang chủ</a>
                            </li>
                            <li class="header__navbar-item {{ active_menu('san-pham') }} {{ request()->segment(1) === 'danh-muc' ? 'active' : '' }}">
                                <a href="/san-pham">
                                    Sản phẩm
                                    <i class="fas fa-angle-down"></i>
                                </a>
                                <ul class="submenu">
                                   <x-shop.category />
                                </ul>
                            </li>
                            <li class="header__navbar-item {{ active_menu('san-pham/sale') }}">
                                <a href="/san-pham/sale">SALE</a>
                            </li>
                            <li class="header__navbar-item {{ active_menu('tin-tuc') }}">
                                <a href="/tin-tuc">Tin tức</a>
                            </li>
                            <li class="header__navbar-item {{ active_menu('chinh-sach-doi-tra') }}">
                                <a href="/chinh-sach-doi-tra">Chính sách</a>
                            </li>
                            <li class="header__navbar-item {{ active_menu('gioi-thieu') }}">
                                <a href="/gioi-thieu">Giới thiệu</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="header__mobile">
            <div class="row">
                <div class="col l-0 m-12 c-12">
                    <div class="header__mobile-search">
                        <form action="/search" class="search__form" method="get">
                            <input class="search__input keyword_search" name="keyword" type="text" placeholder="Tìm kiếm sản phẩm...">
                            <button class="btn__search">
                                <svg version="1.1" class="icon__search-mobile" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                                            <path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
                                    <rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
                                        </svg>
                            </button>
                        </form>
                        <div class="result__content">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

