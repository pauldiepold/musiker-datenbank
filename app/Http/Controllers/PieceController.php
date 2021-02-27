<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use Illuminate\Http\Request;

class PieceController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'composer_id' => ['required', 'exists:composers,id'],
        ]);

        Piece::create($validated);

        return back(303);
    }
}
