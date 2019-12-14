<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use Auth;

class ArtikelController extends Controller
{
    // Constructor untuk mencek admin atau bukan
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function artikel_admin() {
        $user_id = Auth::user()->id;
        $daftar_artikel = Artikel::where('user_id', $user_id)->latest()->paginate(5);
        return view('artikel.admin', compact('daftar_artikel'));
    }

    public function artikel_tambah() {
        return view('artikel.tambah');
    }

    public function artikel_simpan(Request $request) {
        Artikel::create($request->all());
        return redirect()->route('artikel.admin');
    }

    public function artikel_edit($id) {
        $artikel = Artikel::find($id);
        return view('artikel.edit', compact('artikel'));
    }

    public function artikel_update(Request $request, $id) {
        $artikel = Artikel::find($id);
        $artikel->update($request->all());
        return redirect()->route('artikel.admin');
    }

    public function artikel_delete($id) {
        $artikel = Artikel::find($id);
        $artikel->delete();
        return redirect()->route('artikel.admin');
    }
}
