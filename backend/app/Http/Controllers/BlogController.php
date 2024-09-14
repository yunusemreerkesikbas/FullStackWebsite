<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.pages.blogs.blog-list', compact('blogs'));
    }

    public function create()
    {
        return view('admin.pages.blogs.add-blog');
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|string|max:255',
           'status' => 'required|boolean',
           'description' =>'required|string',
           'cover_image' => 'nullable|string',
        ]);
        $blog = new Blog();
        $blog->name = $request->name;
        $blog->status = $request->status;
        $blog->description = $request->description;
        $blog->slug = Str::slug($request->name);

        if ($request->cover_image) {
            $blog->cover_image = $request->cover_image;
        }
        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog başarıyla yüklendi');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.pages.blogs.edit-blog',compact('blog'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|boolean',
            'description' => 'required|string',
            'cover_image' => 'nullable|string',
        ]);

        // Find the existing blog by ID
        $blog = Blog::findOrFail($id);

        // Update the blog fields
        $blog->name = $request->name;
        $blog->status = $request->status;
        $blog->description = $request->description;
        $blog->slug = Str::slug($request->name);

        // Update cover image if provided
        if ($request->cover_image) {
            $blog->cover_image = $request->cover_image;
        }

        // Save the updated blog
        $blog->save();

        // Redirect with success message
        return redirect()->route('admin.blogs.index')->with('success', 'Blog başarıyla güncellendi');
    }


    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        if ($blog->cover_image && \Storage::disk('public')->exists($blog->cover_image)){
            \Storage::disk('public')->delete($blog->cover_image);
        }
        $blog->delete();
        return redirect()->route('admin.blogs.index')->with('success', 'Blog yazısı başarıyla silindi');
    }

    public function uploadCoverImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $path = $file->store('uploads/blogs','public');

            return response()->json(['path' => $path],200);
        }
        return response()->json(['error' => 'Resim yüklenirken hata oluştu.'],400);
    }

}
