<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->paginate(10);
        return view('admin.pages.products.product-list', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.pages.products.add-product', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'stock_status' => 'required|string',
            'sku' => 'nullable|string|max:100',
            'quantity' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'cover_image' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        $product = new Product();
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->stock_status = $request->stock_status;
        $product->sku = $request->sku;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->status = $request->status;

        if ($request->hasFile('cover_image')) {
            $imagePath = $request->file('cover_image')->store('uploads/products', 'public');
            $product->cover_image = $imagePath;
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla eklendi.');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('admin.pages.products.edit-product', compact('product', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'stock_status' => 'nullable|string',
            'sku' => 'nullable|string|max:100',
            'quantity' => 'nullable|integer|min:0',
            'price' => 'nullable|numeric|min:0',
            'cover_image' => 'nullable|string',
            'status' => 'nullable|boolean',
        ]);

        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->slug = Str::slug($request->name);
        $product->category_id = $request->category_id;
        $product->description = $request->description;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->stock_status = $request->stock_status;
        $product->sku = $request->sku;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->status = $request->status;

        if ($request->cover_image) {
            $product->cover_image = $request->cover_image;
        }

        $product->save();

        return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        if ($product->cover_image && \Storage::disk('public')->exists($product->cover_image)) {
            \Storage::disk('public')->delete($product->cover_image);
        }

        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Ürün başarıyla silindi.');
    }
    public function uploadImageGallery()
    {
        return;

    }
    public function uploadCoverImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/products', 'public');

            return response()->json(['path' => $path], 200);
        }

        return response()->json(['error' => 'Dosya yüklenemedi'], 400);
    }
}
