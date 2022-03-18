@extends('admin.layouts.master')

@section('title')

<title>Trang chu</title>

@endsection

@section('content')


<section class="section">
  <div class="section-header">
    <h1>Admin Page</h1>
  </div>

  <div class="section-body">
      <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                  <div class="card-icon bg-primary">
                    <i class="fas fa-chart-line"></i>
                  </div>
                  <div class="card-wrap">
                      <div class="card-header">
                          <h4></h4>
                      </div>Tổng doanh thu
                      <div class="card-body">
                          {{ number_format($total) }}đ
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                  <div class="card-icon bg-danger">
                      <i class="far fa-newspaper"></i>
                  </div>
                  <div class="card-wrap">
                      <div class="card-header">
                          <h4>Bài viết trong tháng</h4>
                      </div>
                      <div class="card-body">
                          {{ $articles }}
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                  <div class="card-icon bg-warning">
                      <i class="far fa-file"></i>
                  </div>
                  <div class="card-wrap">
                      <div class="card-header">
                          <h4>Đơn hàng</h4>
                      </div>
                      <div class="card-body">
                          {{ $transactions }}
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                  <div class="card-icon bg-success">
                      <i class="fas fa-circle"></i>
                  </div>
                  <div class="card-wrap">
                      <div class="card-header">
                          <h4>Khách hàng</h4>
                      </div>
                      <div class="card-body">
                          {{ $users }}
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
