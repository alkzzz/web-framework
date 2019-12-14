<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class KomentarController extends Controller
{
    // Cek apakah user sdh login untuk bisa menambah komentar
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function komentar_simpan(Request $request) {
        Komentar::create($request->all());
        return redirect()->route('artikel.index');
    }

}
