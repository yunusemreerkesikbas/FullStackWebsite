<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // Giriş formunu göster
    public function showLoginForm()
    {
        return view('admin.pages.auth.login');
    }

    // Giriş işlemini gerçekleştir
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        $remember = $request->has('remember');  // Remember me kontrolü

        if (Auth::attempt($credentials, $remember)) {
            // Başarılı login, kullanıcıyı admin dashboard'a yönlendirelim
            return redirect()->intended('admin');
        } else {
            // Giriş başarısız olursa geri döndür
            return back()->withErrors([
                'email' => 'Girdiğiniz bilgiler yanlış.',
            ]);
        }
    }


    // Çıkış işlemi
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
