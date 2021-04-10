<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;


class OrderController extends Controller
{
    public function submit(Request $request)
    {
        dd();
        $contact = new Order();
        $contact-> name = $request->input('name');
        $contact-> napravlenie = $request->input('napravlenie');
        $contact-> opisanie = $request->input('opisanie');
        $contact-> telephone = $request->input('telephone');
        $contact-> deadline = $request->input('deadline');
        $contact-> cost = $request->input('cost');

        $contact->save();

        return redirect()->route('home');
    }
}
