<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChirpRequest;
use App\Models\Chirp;
use GuzzleHttp\Psr7\Response;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response as HttpResponse;


class ChirpController extends Controller
{
    public function index() : View {
        return view('index', [
            'chirps' => Chirp::with('user.userInformation')->latest()->get(),
        ]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $validated = $request->validate([
            'message' => 'required|string|max:255',
        ]);
        $request->user()->chirps()->create($validated);
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chirp $chirp)
    {
        // dd($chirp);
        Gate::authorize('view', $chirp);
        return view('chirp', [
            'chirp'=>$chirp,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ChirpRequest $request, Chirp $chirp)
    {
        Gate::authorize('update', $chirp);
        $validated = $request->validated();
        $chirp->update($validated);
        return redirect('/');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chirp $chirp)
    {
        Gate::authorize('delete', $chirp);
        $chirp->delete();
        return redirect()->back();
    }
}
