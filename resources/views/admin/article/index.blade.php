@extends('admin.layouts.master')

@section('title')
    <title>Article</title>
@endsection
@push('css')
    <link href="{{asset('admins/product/product.css')}}" rel="stylesheet" />
@endpush
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Article Page</h1>
        </div>
        <div class="section-body">
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{ Session('success') }}
                </div>
            @endif
            <a href="{{ route('admin.articles.create') }}" class="btn btn-info btn-sm">Add article</a>
            <br><br>

            <table class="table table-striped table-hover table-sm table-bordered">
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Tên</th>
                    <th>Hình ảnh</th>
                    <th>Ngày tạo</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($articles as $key => $article)
                    <tr>
                        <td>{{ $key + $articles->firstitem() }}</td>
                        <td>{{ $article->name ?? '' }}</td>
                        <td><img src="{{ $article->img_path }}" class="product_image_150_100"></td>
                        <td>{{$article->created_at ?? ''}}</td>
                        <td>
                            <a href="{{route('admin.articles.edit', ['id' => $article->id])}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href=""
                               data-url="{{ route('admin.articles.delete', ['id' => $article->id]) }}"
                               class="btn btn-danger btn-sm action_delete">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $articles->links() }}
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{asset('admins/delete.js')}}"></script>
@endpush
