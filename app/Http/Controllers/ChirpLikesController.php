<?php

namespace App\Http\Controllers;

use App\Chirp;
use Illuminate\Http\Request;

class ChirpLikesController extends Controller
{
    public function store(Chirp $chirp)
    {
        $chirp->like(currentUser());
        return back();
    }

    public function destroy(Chirp $chirp)
    {
        $chirp->dislike(currentUser());
        return back();
    }
}
