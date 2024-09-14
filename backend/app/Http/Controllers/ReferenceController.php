<?php

namespace App\Http\Controllers;

use App\Models\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    public function index()
    {
        $references = Reference::all();
        return view('admin.pages.references.reference-list', compact('references'));
    }

    public function create()
    {
        return view('admin.pages.references.add-reference');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' =>'required|string',
            'cover_image' => 'nullable|string',
        ]);
        $reference = new Reference();
        $reference->name = $request->name;
        $reference->link = $request->link;

        if ($request->cover_image) {
            $reference->cover_image = $request->cover_image;
        }
        $reference->save();

        return redirect()->route('admin.references.index')->with('success', 'Referans başarıyla yüklendi');
    }

    public function edit($id)
    {
        $reference = Reference::findOrFail($id);
        return view('admin.pages.references.edit-reference',compact('reference'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'link' =>'required|string',
            'cover_image' => 'nullable|string',
        ]);

        $reference = Reference::findOrFail($id);

        $reference->name = $request->name;
        $reference->link = $request->link;

        if ($request->cover_image) {
            $reference->cover_image = $request->cover_image;
        }

        $reference->save();

        return redirect()->route('admin.references.index')->with('success', 'Referans başarıyla güncellendi');
    }


    public function destroy($id)
    {
        $reference = Reference::findOrFail($id);
        if ($reference->cover_image && \Storage::disk('public')->exists($reference->cover_image)){
            \Storage::disk('public')->delete($reference->cover_image);
        }
        $reference->delete();
        return redirect()->route('admin.references.index')->with('success', 'Referans başarıyla silindi');
    }

    public function uploadCoverImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/references','public');

            return response()->json(['path' => $path],200);
        }
        return response()->json(['error' => 'Resim yüklenirken hata oluştu.'],400);
    }
}
