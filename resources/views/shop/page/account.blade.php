@extends('shop.layouts.master')
@section('content')
<div class="account">
    <div class="row">
        <div class="col l-12 m-12 c-12">
            <div class="account__title">
                <h1>
                    Tài khoản của bạn
                </h1>
            </div>
        </div>
    </div>
    <div class="account__content">
        <div class="row">
            <div class="col l-3 m-4 c-12">
                <div class="account__sidebar">
                    <div class="account__sidebar-title">
                        <h3>Tài khoản</h3>
                    </div>
                    <ul class="account__sidebar-list">
                        <li>
                            <a href="/account">
                                Thông tin tài khoản
                            </a>
                        </li>
                        <li>
                            <a href="/dang-xuat">
                                Đăng xuất
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col l-9 m-8 c-12">
                <div class="account__info">
                    <div class="title">
                        <h4>Thông tin tài khoản</h4>
                    </div>
                    <div class="account__name">
                        <p>{{ $user->name ?? 'user' }}</p>
                    </div>
                    <div class="account__email">
                        <p>{{ $user->email ?? '' }}</p>
                    </div>
                </div>
                @if($transactions->isEmpty())
                    <div class="account__order">
                        <div class="table">
                            <p>Bạn chưa đặt mua sản phẩm nào</p>
                        </div>
                    </div>
                @else
                    <div class="account__order">
                        <div class="order__table">
                            <p class="order__table-title">Danh sách đơn hàng mới nhất</p>
                            <div class="order__table-content">
                                <table>
                                    <thead>
                                    <tr>
                                        <th class="order__number text__center">
                                            Mã đơn hàng
                                        </th>
                                        <th class="order__date text__center">
                                            Ngày đặt
                                        </th>
                                        <th class="order__price text__center">
                                            Thành tiền
                                        </th>
                                        <th class="order__payment text__center">
                                            Thanh toán
                                        </th>
                                        <th class="order__transport text__center">
                                            Vận chuyển
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td class="text__center">#00{{ $transaction->id }}</td>
                                            <td class="text__center">{{ $transaction->created_at->format('Y-m-d') }}</td>
                                            <td class="text__center">{{number_format($transaction->total_money)}}₫</td>
                                            <td class="text__center">{{$transaction->getType($transaction->type)['name']}}</td>
                                            <td class="text__center">{{$transaction->getStatus($transaction->status)['name']}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        $('.collection__heading-sort').on('click', function() {
            $(this).toggleClass('active');
        })
    </script>
@endpush
