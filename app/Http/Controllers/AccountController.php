<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;
namespace App\Http\Controllers\Auth;


use App\Account;

class AccountController extends Controller
{
    public function dashboard()
    {
        $userId = Auth::user()->id;
        $accounts = Account::where('user_id', $userId)->get();

        return view ('egzaminas.pages.home', compact('accounts'));
    }
}
