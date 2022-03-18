@extends('admin.layouts.master')

@section('title')
    <title>Product</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Edit article</h1>
        </div>

        @if(count($errors)>0)
            @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session('success') }}
            </div>
        @endif

        <form action="{{route('admin.articles.update',['id'=> $article->id])}}" method="POST"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên bài viết</label>
                <input type="text" class="form-control" name="name" value="{{$article->name}}">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="description"
                          id="description">{{ $article->description ?? '' }}</textarea>
            </div>

            <div class="form-group">
                <label>Nội dunng</label>
                <textarea class="form-control" name="content"
                          id="content">{{ $article->description ?? '' }}</textarea>
            </div>

            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="file"
                       class="form-control"
                       name="image_path"
                >
                <div class="col-md-4 mt-1">
                    <img src="{{ $article->img_path }}" alt=""
                         style="width: 130px;
                      height: 100px;
                      object-fit: cover"
                    >
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-sm mt-3 ml-3">Edit</button>
        </form>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script src="{{asset('admins/filemanager.js')}}"></script>
@endpush
