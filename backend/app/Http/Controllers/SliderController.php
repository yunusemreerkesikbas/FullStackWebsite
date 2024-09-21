<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    //
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.pages.sliders.slider-list', compact('sliders'));
    }

    public function create()
    {
        return view('admin.pages.sliders.add-slider');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'display_order' => 'required|integer',
            'status' => 'required|boolean',
            'cover_image' => 'nullable|string',
        ]);
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->status = $request->status;
        $slider->display_order = $request->display_order;
        if ($request->cover_image) {
            $slider->cover_image = $request->cover_image;
        }

        $slider->save();
        return redirect()->route('admin.sliders.index')->with('success', $slider->title . ' başarıyla yüklendi');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.pages.sliders.edit-slider',compact('slider'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'title' => 'required|string|max:255',
            'display_order' => 'required|integer',
            'cover_image' => 'nullable|string',
        ]);
        $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->status = $request->status;
        $slider->display_order = $request->display_order;
        if ($request->cover_image) {
            $slider->cover_image = $request->cover_image;
        }
        $slider->save();
        return redirect()->route('admin.sliders.index')->with('success', $slider->title . ' başarıyla güncellendi');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        if ($slider->cover_image && \Storage::disk('public')->exists($slider->cover_image)){
            \Storage::disk('public')->delete($slider->cover_image);
        }
        $slider->delete();
        return redirect()->route('admin.sliders.index')->with('success', $slider->title . ' başarıyla silindi');
    }

    public function uploadCoverImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/sliders','public');

            return response()->json(['path' => $path],200);
        }
        return response()->json(['error' => 'Resim yüklenirken hata oluştu.'],400);
    }
}
