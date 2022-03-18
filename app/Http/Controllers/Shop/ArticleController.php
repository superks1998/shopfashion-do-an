<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::query()->latest()->paginate(10);

        return view('shop.page.new', compact('articles'));
    }

    public function show($slug)
    {
        $article = Article::query()->where('slug', $slug)->firstOrFail();
        $posts = Article::query()->latest()->paginate(3);

        return view('shop.page.new_detail', compact('article', 'posts'));
    }
}
