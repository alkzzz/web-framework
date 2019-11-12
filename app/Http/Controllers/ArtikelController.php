<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class ArtikelController extends Controller
{
    public function index() {
        $daftar_artikel = Artikel::all()->take(30);
        return view('artikel.index', compact('daftar_artikel'));
    }

    public function detail($id) {
        $artikel = Artikel::find($id);
        return view('artikel.detail', compact('artikel'));
    }
}
