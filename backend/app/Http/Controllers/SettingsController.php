<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function index(Request $request)
    {
        $setting = Settings::first() ?? new Settings();

        if ($request->isMethod('post')) {
            $setting->site_name = $request->site_name;
            $setting->site_description = $request->site_description;
            $setting->instagram = $request->instagram;
            $setting->facebook = $request->facebook;
            $setting->twitter = $request->twitter;
            $setting->linkedin = $request->linkedin;
            $setting->tel_no = $request->tel_no;
            $setting->wp_no = $request->wp_no;
            $setting->email = $request->email;
            $setting->address = $request->address;
            $setting->meta_title = $request->meta_title;
            $setting->meta_description = $request->meta_description;
            $setting->meta_keywords = $request->meta_keywords;

            // Cover image kontrolü
            if ($request->hasFile('cover_image')) {
                $path = $request->file('cover_image')->store('uploads/settings', 'public');
                $setting->cover_image = $path;
            }

            $setting->save();

            return redirect()->back()->with('success', 'Ayarlar başarıyla güncellendi');
        }


        return view('admin.pages.settings.settings', compact('setting'));
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
