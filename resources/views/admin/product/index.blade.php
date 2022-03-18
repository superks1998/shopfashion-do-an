@extends('admin.layouts.master')

@section('title')
<title>Product</title>
@endsection

@push('css')
    <link href="{{asset('admins/product/product.css')}}" rel="stylesheet" />
@endpush

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Product Page</h1>
  </div>
    {{--search--}}
    <x-admins.search />
  <div class="section-body">
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
          {{ Session('success') }}
        </div>
	@endif
	<a href="{{ route('admin.products.create') }}" class="btn btn-info btn-sm">Add product</a>
	<br><br>
	<table class="table table-striped table-hover table-sm table-bordered">
		<thead>
			<tr>
                <th scope="col">#</th>
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Giá</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Size</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Số lượng</th>
                <th scope="col">Nổi bật</th>
                <th scope="col">Action</th>
			</tr>
		</thead>
		<tbody class="post_table">
		 @foreach($products as $key => $productItem)
		 <tr>
			<td>{{ $key + $products->firstitem() }}</td>
			<td>{{ $productItem->name }}</td>
			<td>{{ number_format($productItem->price)}}</td>
			<td><img src="{{ $productItem->feature_image_before }}" class="product_image_150_100"></td>
            <td>{{ $productItem->size ?? '' }}</td>
			<td>{{ optional($productItem->category)->name ?? '' }}</td>
			<td>
				{{ $productItem->product_number ?? 0 }}
			</td>
			<td>
					<a href="{{route('admin.products.action', ['hot','id' => $productItem->id])}}" class="badge badge-{{$productItem->getHot($productItem->hot)['class']}}">{{$productItem->getHot($productItem->hot)['name']}}</a>
			</td>
			<td>
					<a href="{{route('admin.products.edit', ['id' => $productItem->id])}}"
						 class="btn btn-primary">Edit</a>
			<a  href=""
					data-url="{{ route('admin.products.delete', ['id' => $productItem->id]) }}"
					class="btn btn-danger action_delete">Delete</a>
			</td>
         </tr>
		 @endforeach
        </tbody>
	</table>
	{{ $products->links() }}
  </div>
</section>
@endsection

@push('scripts')
    <script src="{{asset('admins/delete.js')}}"></script>
@endpush
