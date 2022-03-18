@extends('shop.layouts.master')

@section('content')
    <div class="app__container">
        <div class="grid">
            <div class="container">
                <div class="breadcrumb">
                </div>

                <div class="search__error">
                    <div class="header__page">
                        <h1 class="title">Tìm kiếm</h1>
                    </div>
                    <div class="content__page text__center">
                        <h2>Không tìm thấy nội dung bạn yêu cầu</h2>
                        <div class="subtext">
                                <span>Không tìm thấy
                                    <strong>"{{ $keyword }}".</strong>
                                </span>
                            <span>Vui lòng kiểm tra chính tả, sử dụng các từ tổng quát hơn và thử lại</span>
                        </div>
                        <div class="search__field">
                            <form action="/search" class="site__nav-form" method="get">
                                <input class="site__nav-input keyword_search" name="keyword" type="text" placeholder="Tìm kiếm sản phẩm...">
                                <button class="btn__search" type="submit">
                                    <svg version="1.1" class="icon__search" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 27" style="enable-background:new 0 0 24 27;" xml:space="preserve">
                                        <path d="M10,2C4.5,2,0,6.5,0,12s4.5,10,10,10s10-4.5,10-10S15.5,2,10,2z M10,19c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7S13.9,19,10,19z"></path>
                                        <rect x="17" y="17" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -9.2844 19.5856)" width="4" height="8"></rect>
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
