<div class="col l-3 m-12 c-12">
    <div class="news__sidebar">
        <div class="news__latest">
            <div class="new__latest-title">
                <h3>Bài viết mới nhất</h3>
            </div>
            <div class="new__latest-content">
                @foreach($articles as $article)
                    <article class="news__latest-post col l-12 m-12 c-12">
                    <div class="post row">
                        <div class="col l-4 m-12 c-12">
                            <a href="/tin-tuc/{{$article->slug}}" class="post__thumbnail">
                                <img src="{{ $article->img_path }}" alt="">
                            </a>
                        </div>
                        <div class="col l-8 m-12 c-12">
                            <a href="/tin-tuc/{{$article->slug}}">
                                <h3 class="post__title">
                                    {{ $article->name }}
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
