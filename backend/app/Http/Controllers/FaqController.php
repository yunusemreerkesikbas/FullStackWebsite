<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    //
    public function index()
    {
        $faqs = Faq::all();
        return view('admin.pages.faqs.faq-list', compact('faqs'));
    }

    public function create()
    {
        return view('admin.pages.faqs.add-faq');
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' =>'required|string',
        ]);
        $faq = new Faq();
        $faq->question = $request->question;
        $faq->answer = $request->answer;


        $faq->save();

        return redirect()->route('admin.faqs.index')->with('success', 'Soru başarıyla yüklendi');
    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.pages.faqs.edit-faq',compact('faq'));
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'question' => 'required|string|max:255',
            'answer' =>'required|string',
        ]);

        // Find the existing blog by ID
        $faq = Faq::findOrFail($id);

        $faq->question = $request->question;
        $faq->answer = $request->answer;


        // Save the updated blog
        $faq->save();

        // Redirect with success message
        return redirect()->route('admin.faqs.index')->with('success', 'Soru başarıyla güncellendi');
    }


    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);

        $faq->delete();
        return redirect()->route('admin.faqs.index')->with('success', 'Soru başarıyla silindi');
    }

}
