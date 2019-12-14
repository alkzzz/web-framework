<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DeleteUser extends Controller
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
    public function __invoke(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('daftar.user');
    }
}
