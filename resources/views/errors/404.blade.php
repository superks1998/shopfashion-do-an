@if (request()->is('admin/*'))
    @extends('errors::minimal')

    @section('title', __('Not Found'))
    @section('code', '404')
    @section('message', __('Not Found'))
@else
    @include('shop.errors.404')
@endif

