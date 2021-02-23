<?php

namespace App\Http\Controllers;

use App\Chirp;
use Illuminate\Database\QueryException;
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
        return view('chirps.index', [
            'chirps' => currentUser()->timeline()
        ]);
    }

    public function store()
    {
        $validated = request()->validate(['body' => 'required|max:255']);

        $status = [
            'state' => 'success',
            'message' => 'Chirp created successfully.'
        ];

        try {
            Chirp::create([
                'user_id' => auth()->id(),
                'body' => $validated['body']
            ]);
        } catch (QueryException $exception) {
            $status = [
                'state' => 'error',
                'message' => 'Failed to create chirp.'
            ];
        }

        return redirect()
            ->route('home')
            ->with($status['state'], true)
            ->with('status', $status['message']);
    }
}
