<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/categories', function () {
    return view('admin.pages.categories.category-list');
});
Route::get('/add-category', function () {
    return view('admin.pages.categories.add-category');
});

Route::get('/products', function () {
    return view('admin.pages.products.product-list');
});
Route::get('/add-product', function () {
    return view('admin.pages.products.add-product');
});
Route::get('/blogs', function () {
    return view('admin.pages.blog.blog-list');
});

Route::get('/add-blog', function () {
    return view('admin.pages.blog.add-blog');
});
Route::get('/brands', function () {
    return view('admin.pages.blog.blog-list');
});

Route::get('/add-brand', function () {
    return view('admin.pages.blog.add-blog');
});
Route::get('/faqs', function () {
    return view('admin.pages.faqs.faq-list');
});

Route::get('/add-faq', function () {
    return view('admin.pages.faqs.add-faq');
});
Route::get('/sliders', function () {
    return view('admin.pages.sliders.slider-list');
});

Route::get('/add-slider', function () {
    return view('admin.pages.sliders.add-slider');
});
Route::get('/gallery', function () {
    return view('admin.pages.gallery.gallery-list');
});

Route::get('/add-image', function () {
    return view('admin.pages.gallery.add-image');
});
