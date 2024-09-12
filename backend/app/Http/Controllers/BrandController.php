<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{
    //
    public function index()
    {
        $brands = Brand::all();
        return view('admin.pages.brands.brand-list', compact('brands'));
    }
    public function create()
    {
        return view('admin.pages.brands.add-brand');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:255',
            'status' => 'required|boolean',
            'cover_image' => 'nullable|string',

        ]);
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->status = $request->status;
        $brand->slug = Str::slug($request->name);

        if ($request->cover_image) {
            $brand->cover_image = $request->cover_image;
        }

        $brand->save();

        return redirect()->route('admin.brands.index')->with('success','Markalar Başarıyla Eklendi');

    }
    public function edit($id)
    {
        $brand = Brand::findOrFail($id);
        return view('admin.pages.brands.edit-brand',compact('brand'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
            'cover_image' => 'nullable|string',

        ]);

        $brand = Brand::findOrFail($id);
        $brand->name = $request->name;
        $brand->status = $request->status;

        if ($request->cover_image) {
            $brand->cover_image = $request->cover_image;
        }
        $brand->save();
        return redirect()->route('admin.brands.index')->with('success','Markalar Baaşarıyla Güncellendi');
    }
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);

        if ($brand->cover_image && \Storage::disk('public')->exists($brand->cover_image)){
            \Storage::disk('public')->delete($brand->cover_image);
        }
        $brand->delete();

        return redirect()->route('admin.brands.index')->with('success','Markalar Başarıyla Silindi');
    }

    public function uploadCoverImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/brands','public');

            return response()->json(['path' => $path],200);
        }
        return response()->json(['error' => 'Resim yüklenirken hata oluştu.'],400);
    }
}
