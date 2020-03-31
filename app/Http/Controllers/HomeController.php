<?php

namespace App\Http\Controllers;

use App\Account;
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
    public function atsijungti()
    {
        Auth::logout();

        return redirect('/');
    }
    public function index()
    {
        $userId = Auth::user()->id;
        $accounts = Account::where('user_id', $userId)->get();

        return view ('egzaminas.pages.home', compact('accounts'));
    }
}
