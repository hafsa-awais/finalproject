<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Properties;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TransactionController extends Controller
{
    // view
    public function create($id)
    {
        $properties = Properties::find($id);
        return view('transaction', ['property' => $properties]);
    }

    // store
    public function store(Request $request)
    {
        $result = new Transaction;
        $result->total_price = $request->total_price;
        $result->startdate = $request->startdate;
        $result->enddate = $request->enddate;
        $result->status = "pending";
        $result->cardname = $request->cardname;
        $result->cardnumber = $request->cardnumber;
        $result->cardexp = $request->cardexp;
        $result->cardcvv = $request->cardcvv;
        $result->cardtype = $request->cardtype;
        $result->properties_id = $request->properties_id;
        $result->users_id = $request->users_id;
        $result->save();

        if ($result)
            return redirect('dashboard')->with('success', 'Thank you. Your booking has been registered. We will be in touch as soon as possible');
        else
            return redirect()->back()->with('failed', 'Problem with booking. Please try again.');
    }


    // current_transactions (dashboard)
    public function current()
    { {
            $transactions = Transaction::select(
                "transaction.total_price",
                "properties.title",
            )
                ->join("properties", "properties.id", "=", "transaction.properties_id")
                ->where("transaction.users_id", "=", Auth::user()->id)
                ->get();

            return view('dashboard', ['transactions' => $transactions]);
        }
    }
}
