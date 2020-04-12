<?php

namespace App\Http\Controllers;

use App\Chirp;
use Illuminate\Http\Request;

class ChirpsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home', [
            'chirps' => auth()->user()->timeline()
        ]);
    }

    public function store()
    {
        $validated = request()->validate(['body' => 'required|max:255']);

        Chirp::create([
            'user_id' => auth()->id(),
            'body' => $validated['body']
        ]);

        return redirect()->route('home');
    }
}
