<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\SessionUserRequest;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(SessionUserRequest $request) {
        $credentials = $request->validated();
        // ddd($credentials);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // dd(Auth::user());
            Auth::login(Auth::user());
            return redirect()->intended('/')->with('success', 'Chào mừng '.Auth::user()->username);
        }
        return back()->withErrors([
            'error'=>'Tên tài khoản hoặc mật khẩu không đúng',
        ]);
    }

    public function destroy(Request $request)
    {
        auth()->logout();
        return redirect('/')->with('success', 'Bạn đã đăng xuất khỏi tài khoản');
    }
}
