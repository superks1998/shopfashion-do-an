@extends('shop.layouts.master')
@section('content')

    <div class="app__container">
        <div class="grid">
            <div class="container">
                <div class="breadcrumb">
                    <div class="row no-gutters">
                        <div class="col l-12 m-12 c-12">
                            <ul class="breadcrumb__link">
                                <li>
                                    <a href="/">Trang chủ</a>
                                </li>
                                <li>
                                    <a href="/tin-tuc">Tin tức</a>
                                </li>
                                <li>
                                    <span>{{ $article->name ?? '' }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="news news__details">
                    <div class="row">
                        <div class="col l-9 m-12 c-12">
                            <div class="news__content">
                                <div class="news__content-title">
                                    <h3>{{ $article->name }}</h3>
                                    <div class="post__meta">
                                            <span class="vcard">
                                                <i class="fas fa-book"></i>
                                                Tin tức
                                                <span class="news__date far fa-clock">
                                                    <time>{{ $article->created_at->toDateString() }}</time>
                                                </span>
                                            </span>
                                    </div>
                                </div>
                                <div class="news__detail-content">
                                    <div class="news__details-img">
                                        <img src="{{ $article->img_path ?? '' }}" alt="">
                                    </div>
                                    {!! $article->content ?? '' !!}
                                </div>
                            </div>
                        </div>
                        <x-shop.article />
                        <div class="col l-12 m-12 c-12">
                            <div class="news__sidebar">
                                <div class="news__latest">
                                    <div class="new__latest-title">
                                        <h3>Bài viết liên quan</h3>
                                    </div>
                                    <div class="new__latest-content owl-carousel owl-theme">
                                        @foreach($posts as $post)
                                            <article class="news__latest-post col l-12 m-12 c-12">
                                            <div class="post row">
                                                <div class="col l-4 m-12 c-12">
                                                    <a href="/tin-tuc/{{$post->slug}}" class="post__thumbnail">
                                                        <img src="{{$post->img_path}}" alt="">
                                                    </a>
                                                </div>
                                                <div class="col l-8 m-12 c-12">
                                                    <a href="/tin-tuc/{{$post->slug}}">
                                                        <h3 class="post__title">
                                                            {{ $post->name }}
                                                        </h3>
                                                    </a>
                                                    <div class="post__meta">
                                                            <span class="vcard">
                                                                <span class="news__date far fa-clock">
                                                                    <time>{{ $article->created_at->toDateString() }}</time>
                                                                </span>
                                                            </span>
                                                    </div>
                                                </div>
                                            </div>
                                         </article>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        $('.new__latest-content.owl-carousel').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            nav: true,
            // autoplay: true,
            autoplayHoverPause: true,
            responsive: {
                0:{
                    items:3
                },
                600:{
                    items:3
                },
                1000:{
                    items:3
                }
            }
        });
    </script>
@endpush
