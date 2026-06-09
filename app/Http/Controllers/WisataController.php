<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::where('status', true)->get();
        return view('pages.wisatas.index', compact('wisatas'));
    }

    public function show(Wisata $wisatum)
    {
        return view('pages.wisatas.show', compact('wisatum'));
    }
}