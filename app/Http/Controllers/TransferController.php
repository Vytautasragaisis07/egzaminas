<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
use App\Transfer;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Gate;


class TransferController extends Controller
{
    public function __construct(){
        $this->middleware('auth',[]);
    }

	public function makeTransfer()
    {
        $transfers = Transfer::all();
        $userId = Auth::user()->id;
        $accounts = Account::where('user_id', $userId)->get();
        return view ('egzaminas.pages.maketransfer', compact('transfers', 'accounts'));
    }
	public function store_transfer(Request $request)
    {
        $validateData = $request->validate([
            'nr_account' => 'required',
            'description' => 'required',
            'sum' => 'required',
            'name' => 'required'
        ]);

        $transfer = Transfer::create([
            'nr_account' => request('nr_account'),
            'description' => request('description'),
            'sum' => request('sum'),
            'name' => request('name')
        ]);

        return redirect('/transfer_summary');
    }

	public function Transfersummary(){
		$transfers = Transfer::all();
        $userId = Auth::user()->id;
        $accounts = Account::where('user_id', $userId)->get();
		return view ('egzaminas.pages.accountsummary', compact('transfers', 'accounts'));
	}
}
