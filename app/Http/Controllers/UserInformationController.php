<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInformationRequest;
use App\Models\UserInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInformationController extends Controller
{
    public function edit() {
        $user = Auth::user()->userInformation;
        return view('profile', [
            'userInformation' => $user,
        ]);
    }

    public function update(UserInformationRequest $request, UserInformation $userInformation) {
        // dd($request['gender']);
        $validated = $request->validated();
        $userInformation->update($validated);
        return redirect()->back();
    }
}
