<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInformation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\UserInformationRequest;

class UserInformationController extends Controller
{
    public function edit() {
        $user = Auth::user()->userInformation;
        Gate::authorize('view', $user);
        return view('profile', [
            'userInformation' => $user,
        ]);
    }

    public function update(UserInformationRequest $request, UserInformation $userInformation) {
        // dd($request['gender']);
        Gate::authorize('update', $userInformation);
        $validated = $request->validated();
        $userInformation->update($validated);
        return redirect()->back();
    }
}
