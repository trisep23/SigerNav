<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function index(): JsonResponse
    {
        $wisatas = Wisata::where('status', true)->get();

        return response()->json([
            'type' => 'FeatureCollection',
            'features' => $wisatas->map(fn($w) => [
                'type' => 'Feature',
                'properties' => [
                    'id' => $w->id,
                    'nama' => $w->nama,
                    'alamat' => $w->alamat,
                    'kategori' => $w->kategori,
                    'gambar1' => $w->gambar1,
                    'gambar2' => $w->gambar2,
                    'gambar3' => $w->gambar3,
                    'gambar4' => $w->gambar4,
                    'gambar5' => $w->gambar5,
                    'gambar6' => $w->gambar6,
                    'gambar7' => $w->gambar7,
                    'gambar8' => $w->gambar8,
                    'gambar9' => $w->gambar9,
                    'gambar10' => $w->gambar10,
                    'deskripsi' => $w->deskripsi,
                    'elevasi' => $w->elevasi,
                ],
                'geometry' => [
                    'type' => 'Point',
                    'coordinates' => [$w->longitude, $w->latitude],
                ],
            ]),
        ]);
    }

    public function show(Wisata $wisatum): JsonResponse
    {
        return response()->json($wisatum);
    }
}