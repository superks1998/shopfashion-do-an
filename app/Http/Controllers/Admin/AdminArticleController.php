<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Traits\DeleteModelTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminArticleController extends Controller
{
    use StorageImageTrait, DeleteModelTrait;
    private Article $article;

    public function __construct(Article $article)
    {
        $this->article = $article;
    }
    public function index()
    {
        $articles = $this->article->paginate(10);

        return view('admin.article.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.article.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image_path' => 'image'
        ]);

        $article = [
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'content' => $request->input('content'),
            'user_id' => auth()->id(),
            'description' => $request->input('description'),
        ];
        $dataImage = $this->storageTraitUpload($request, 'image_path', 'article');
        if (!empty($dataImage)) {
            $article['img_path'] = $dataImage['file_path'];
        }

        $this->article->create($article);

        return redirect()->back()->with('success','Bạn đã thêm dữ liệu thành công');
    }

    public function edit($id)
    {

        $article = $this->article->findOrFail($id);

        return view('admin.article.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'content' => 'required',
            'image_path' => 'image'
        ]);

        $article = [
            'name' => $request->input('name'),
            'slug' => Str::slug($request->input('name')),
            'content' => $request->input('content'),
            'user_id' => auth()->id(),
            'description' => $request->input('description'),
        ];

        $dataImage = $this->storageTraitUpload($request, 'image_path', 'article');

        if (!empty($dataImage)) {
            $article['img_path'] = $dataImage['file_path'];
        }

        $this->article->findOrFail($id)->update($article);

        return redirect()->route('admin.articles.index')->with('success','Bạn đã chỉnh sửa bài viết thành công');
    }

    public function delete($id)
    {
        return $this->deleteModelTrait($id, $this->article);
    }
}
