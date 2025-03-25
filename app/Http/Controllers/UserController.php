<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;

class UserController extends Controller
{
    public function home(): Application|Redirector|RedirectResponse
    {
        if (auth()->user()?->is_handyman()) {
            return redirect(route('home.handyman'));
        }

        return redirect(route('home.client'));
    }

    public function services(): View|Application|Factory
    {
        return view('services')->with('craftsman', User::query()->where('role', 'handyman')->get());
    }

    public function orders(): View|Application|Factory
    {
        return view('orders')->with('tasks', Task::all());
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function choose_industry(Request $request): Application|Redirector|RedirectResponse
    {
        $user = User::query()->findOrFail(auth()->id());

        try {
            $user?->update(['industry' => $request->industry]);

            return redirect(route('choose.speciality'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function choose_speciality(Request $request): Application|Redirector|RedirectResponse
    {
        $user = User::query()->findOrFail(auth()->id());

        $specialities = $request->speciality;
        if (is_array($specialities)) {
            $speciality = implode(',', $specialities);
        }

        try {
            if (isset($speciality)) {
                $user?->update(['speciality' => $speciality]);
            }

            return redirect(route('choose.done'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
