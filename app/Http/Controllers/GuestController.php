<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;

class GuestController extends Controller
{
    // Halaman Depan
    public function artikel() {
        $daftar_artikel = Artikel::paginate(3);
        return view('artikel.index', compact('daftar_artikel'));
    }

    public function detail($id) {
        $artikel = Artikel::find($id);
        return view('artikel.detail', compact('artikel'));
    }
}
