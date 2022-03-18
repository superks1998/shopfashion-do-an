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
                                    <span>Tin tức</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="news">
                    <div class="row">
                        <div class="col l-9 m-12 c-12">
                            <div class="news__content">
                                <div class="news__content-title">
                                    <h3>Tất cả bài viết</h3>
                                </div>
                                <div class="news__posts">
                                    @foreach($articles  as $article)
                                        <article class="news__loop col l-12 m-12 c-12">
                                        <div class="post row">
                                            <div class="col l-3 m-12 c-12">
                                                <a href="/tin-tuc/{{$article->slug}}" class="post__thumbnail">
                                                    <img src="{{ $article->img_path ?? '' }}" alt="">
                                                </a>
                                            </div>
                                            <div class="col l-9 m-12 c-12">
                                                <a href="/tin-tuc/{{$article->slug}}">
                                                    <h3 class="post__title">
                                                        {{ $article->name ?? '' }}
                                                    </h3>
                                                </a>
                                                <div class="post__meta">
                                                        <span class="vcard">
                                                            <i class="fas fa-book"></i>
                                                            Tin tức
                                                            <span class="news__date far fa-clock">
                                                                <time>{{ $article->created_at->toDateString() }}</time>
                                                            </span>
                                                        </span>
                                                </div>
                                                <div class="post__content">
                                                    {!! $article->description ?? '' !!}
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    @endforeach
                                </div>
                            </div>
                            {{ $articles->links('shop.pagination.pagination') }}
                        </div>
                        <x-shop.article />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
