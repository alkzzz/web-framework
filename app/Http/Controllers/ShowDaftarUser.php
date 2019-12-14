<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ShowDaftarUser extends Controller
{
    // Constructor untuk mencek admin atau bukan
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $daftar_user = User::where('username', '!=', 'admin')->get()->sortBy('name');
        return view('daftar_user', compact('daftar_user'));
    }
}
