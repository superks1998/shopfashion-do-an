<?php

Route::group([
    'namespace' => 'Shop'
], function () {
    Route::get('dang-nhap', 'AuthController@login')->name('get.login');
    Route::post('dang-nhap', 'AuthController@postLogin')->name('post.login');
    Route::get('dang-ky', 'AuthController@register')->name('get.register');
    Route::post('dang-ky', 'AuthController@create')->name('post.register');

    Route::get('/', 'KleinoController@index')->name('index');
    Route::get('gioi-thieu', 'KleinoController@aboutUs');
    Route::get('chinh-sach-bao-mat', 'KleinoController@policyPrivacy');
    Route::get('chinh-sach-doi-tra', 'KleinoController@policyReturn');
    Route::get('dieu-khoan-dich-vu', 'KleinoController@termsService');
    Route::get('/san-pham', 'KleinoController@getAllProduct')->name('product.all');
    Route::get('/san-pham/sale', 'KleinoController@getAllSaleProduct')->name('product.sale');
    Route::get('/danh-muc/{slug}', 'KleinoController@getCategory')->name('product.category');
    Route::get('/autocomplete', 'ProductController@autoCompleteSearch')->name('autocomplete');
    Route::get('/search', 'ProductController@search')->name('search');
    Route::get('/product/{id}', 'ProductController@productDetail')->name('shop.product')->where('id', '[0-9]+');
    Route::get('/product/add/{id}', 'ProductController@addCart')->name('add.cart')->where('id', '[0-9]+');
    Route::get('/show-cart', 'ProductController@show')->name('show.cart');
    Route::get('/delete-cart', 'ProductController@delete')->name('delete.cart');
    Route::get('/update-qty', 'ProductController@updateQty')->name('update.qty');
    Route::get('tin-tuc', 'ArticleController@index');
    Route::get('tin-tuc/{slug}', 'ArticleController@show');
    Route::get('thanh-toan', 'ProductController@checkout');
    Route::get('thanh-toan/thanh-cong/{id}', 'ProductController@checkoutSuccess')->name('checkout.success');
    Route::post('/save-checkout', 'ProductController@save')->name('checkout');

    Route::group([
        'middleware' => 'auth.customer'
    ], function () {
        Route::get('/dang-xuat', 'AuthController@logout')->name('shop.logout');
        Route::get('account', 'KleinoController@account')->name('account');
    });
});



