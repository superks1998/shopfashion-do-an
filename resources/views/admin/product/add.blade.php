@extends('admin.layouts.master')

@section('title')
    <title>Product</title>
@endsection

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Add post</h1>
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

        <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label>Giá sản phẩm</label>
                <input type="text"
                       class="form-control"
                       name="price"
                       placeholder="Nhập giá sản phẩm"
                       value="{{old('price')}}"
                >
            </div>
            <div class="form-group">
                <label>SKU</label>
                <input type="text" class="form-control" name="sku">
            </div>
            <div class="form-group">
                <label>Chọn Size</label>
                <select class="form-control select2_init" name="size">
                    <option value="">Chọn size</option>
                    @foreach(\App\Enums\ProductSizeType::getValues() as $size)
                        <option value="{{ $size }}">{{ $size }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Giá khuyến mãi</label>
                <input type="text" class="form-control" name="sale" value="0">
            </div>
            <div class="form-group">
                <label>Số lượng</label>
                <input type="text" class="form-control" name="number" value="1">
            </div>
            <div class="form-group">
                <label>Chọn danh mục</label>
                <select class="form-control select2_init" name="category_id">
                    <option value="">Chọn danh mục</option>
                    {!! $htmlOption !!}
                </select>
            </div>
            <div class="form-group">
                <label>Ảnh đại diện trước</label>
                <input type="file"
                       class="form-control-file"
                       name="feature_image_before"
                >
            </div>
            <div class="form-group">
                <label>Ảnh đại diện sau</label>
                <input type="file"
                       class="form-control-file"
                       name="feature_image_after"
                >
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>
            <div class="form-group">
                <label>Ảnh chi tiết</label>
                <input type="file"
                       multiple
                       class="form-control-file"
                       name="image_path[]"
                >
            </div>
            <button type="submit" class="btn btn-primary btn-sm ml-3">Add post</button>
        </form>

    </section>

@endsection

@push('scripts')


    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
    <script src="{{asset('admins/filemanager.js')}}"></script>


@endpush
