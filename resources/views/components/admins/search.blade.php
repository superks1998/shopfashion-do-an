<form class="form-inline" action="{{route('admin.products.search')}}" method="get">
    <div class="form-group mx-sm-2 mb-2">
        <label class="sr-only"> Nhập ID </label>
        <input type="text" class="form-control" name="product_id"
               value="{{ request()->product_id }}"
               placeholder="Nhập Id">
    </div>

    <div class="form-group mx-sm-2 mb-2">
        <label class="sr-only"> Nhập tên sản phẩm </label>
        <input type="text"
               value="{{ request()->name }}"
               class="form-control" placeholder="Nhập tên sản phẩm" name="name">
    </div>

    <div class="form-group mx-sm-2 mb-2">
        <label class="sr-only"> Nhập tên sản phẩm </label>
        <select class="form-control" name="category_id">
            <option value="">Chọn danh mục sản phẩm</option>
            {!! $htmlOptionSearchHeader !!}
        </select>
    </div>
    <button type="submit" class="btn btn-primary mb-2">Search</button>
    <button type="submit" value="true" name="export" class="btn btn-success mb-2 ml-2">Export excel</button>
</form>
