<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;

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

    Route::get('products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('product/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('products/store', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('product/{id}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('product/{id}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('product/{id}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
    Route::post('/admin/product/upload-cover-image', [ProductController::class, 'uploadCoverImage'])->name('admin.products.uploadCoverImage');

    Route::get('brands', [BrandController::class, 'index'])->name('admin.brands.index');
    Route::get('brand/create', [BrandController::class, 'create'])->name('admin.brands.create');
    Route::post('product/store', [BrandController::class, 'store'])->name('admin.brands.store');
    Route::get('brand/{id}/edit', [BrandController::class, 'edit'])->name('admin.brands.edit');
    Route::put('brand/{id}', [BrandController::class, 'update'])->name('admin.brands.update');
    Route::delete('brand/{id}', [BrandController::class, 'destroy'])->name('admin.brands.destroy');
    Route::post('brand/upload-cover-image',[BrandController::class, 'uploadCoverImage'])->name('admin.brands.uploadCoverImage');

    Route::get('blogs', [BlogController::class, 'index'])->name('admin.blogs.index');
    Route::get('blog/create', [BlogController::class, 'create'])->name('admin.blogs.create');
    Route::post('blog/store', [BlogController::class, 'store'])->name('admin.blogs.store');
    Route::get('blog/{id}/edit', [BlogController::class, 'edit'])->name('admin.blogs.edit');
    Route::put('blog/{id}', [BlogController::class, 'update'])->name('admin.blogs.update');
    Route::delete('blog/{id}', [BlogController::class, 'destroy'])->name('admin.blogs.destroy');
    Route::post('blog/upload-cover-image',[BlogController::class, 'uploadCoverImage'])->name('admin.blogs.uploadCoverImage');

    Route::get('faqs', [FaqController::class, 'index'])->name('admin.faqs.index');
    Route::get('faq/create', [FaqController::class, 'create'])->name('admin.faqs.create');
    Route::post('faq/store', [FaqController::class, 'store'])->name('admin.faqs.store');
    Route::get('faq/{id}/edit', [FaqController::class, 'edit'])->name('admin.faqs.edit');
    Route::put('faq/{id}', [FaqController::class, 'update'])->name('admin.faqs.update');
    Route::delete('faq/{id}', [FaqController::class, 'destroy'])->name('admin.faqs.destroy');
});
