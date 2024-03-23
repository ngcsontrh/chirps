<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterNewUserRequest;
use App\Models\UserInformation;

class RegisterUserController extends Controller
{
    public function create() : View {
        return view('auth.register');
    }

    public function store(RegisterNewUserRequest $request) {
        $validatedData = $request->validated();
        $user = User::create($validatedData);
        UserInformation::create([
            'user_id' => $user['id'],
        ]);
        Auth::login($user);
        return redirect('/')->with('success', 'Đã đăng ký thành công tài khoản');
    }
}
