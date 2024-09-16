<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.pages.categories.category-list', compact('categories'));
    }

    public function create()
    {
        $categories = Category::whereNull('parent_id')->get();
        return view('admin.pages.categories.add-category', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
            'parent_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'cover_image' => 'nullable|string',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->status = $request->status;
        $category->parent_id = $request->parent_id;
        $category->description = $request->description;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;
        $category->slug = Str::slug($request->name);

        // Resmi kaydetme
        if ($request->cover_image) {
            $category->cover_image = $request->cover_image;
        }

        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Kategori başarıyla eklendi.');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::whereNull('parent_id')->get(); // Üst kategoriler için
        return view('admin.pages.categories.edit-category', compact('category', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'nullable|boolean',
            'parent_id' => 'nullable|exists:categories,id',
            'description' => 'nullable|string',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:255',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);



        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->status = $request->status;
        $category->parent_id = $request->parent_id;
        $category->description = $request->description;
        $category->meta_title = $request->meta_title;
        $category->meta_description = $request->meta_description;

        if ($request->cover_image) {
            $category->cover_image = $request->cover_image;
        }

        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Kategori başarıyla güncellendi.');
    }
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Kategoriye ait resim varsa sil
        if ($category->cover_image && \Storage::disk('public')->exists($category->cover_image)) {
            \Storage::disk('public')->delete($category->cover_image);
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success', 'Kategori başarıyla silindi.');
    }

    public function uploadCoverImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/cover_images', 'public');

            return response()->json(['path' => $path], 200);
        }

        return response()->json(['error' => 'Dosya yüklenemedi'], 400);
    }

}
