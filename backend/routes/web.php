<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/admin/about', function () {
    return view('about');
});

Route::get('/admin/products', function () {
    return view('admin.pages.products.product-list');
});
Route::get('/admin/product/create', function () {
    return view('admin.pages.products.add-product');
});
Route::get('/admin/blogs', function () {
    return view('admin.pages.blog.blog-list');
});

Route::get('/admin/blog/create', function () {
    return view('admin.pages.blog.add-blog');
});
Route::get('/admin/brands', function () {
    return view('admin.pages.brands.brand-list');
});

Route::get('/admin/brand/create', function () {
    return view('admin.pages.brands.add-brand');
});
Route::get('/admin/faqs', function () {
    return view('admin.pages.faqs.faq-list');
});

Route::get('/admin/faq/create', function () {
    return view('admin.pages.faqs.add-faq');
});
Route::get('/admin/sliders', function () {
    return view('admin.pages.sliders.slider-list');
});

Route::get('/admin/slider/create', function () {
    return view('admin.pages.sliders.add-slider');
});
Route::get('/admin/gallery', function () {
    return view('admin.pages.gallery.gallery-list');
});

Route::get('/admin/gallery/create', function () {
    return view('admin.pages.gallery.add-image');
});
Route::get('/admin/references', function () {
    return view('admin.pages.references.reference-list');
});

Route::get('/admin/reference/create', function () {
    return view('admin.pages.gallery.add-reference');
});
Route::get('/admin/settings', function () {
    return view('admin.pages.settings.settings');
});
Route::get('/admin/users', function () {
    return view('admin.pages.users.user-list');
});

Route::resource('categories', CategoryController::class);

Route::prefix('admin')->group(function () {
    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories.index');
    Route::get('category/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('category/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    Route::post('/admin/categories/upload-cover-image', [CategoryController::class, 'uploadCoverImage'])->name('admin.categories.uploadCoverImage');
});
