<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        return view('welcome');
    }

    public function beliPulsa(Request $request)
    {
        $user = User::find(Auth::user()->id);
        $user->balance = $user->balance - $request->pulsa;
        $user->save();
        return redirect('/')->with('success', 'Pembelian pulsa berhasil');
    }
}
