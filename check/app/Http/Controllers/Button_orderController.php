<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class Button_orderController extends Controller
{
    public function submit(Request $req)
    {
        $userID = Auth::id();

        DB::update('update orders set IspID = :id where id = :orderID', ['id' => $userID, 'orderID' => $req['id']]);

        return redirect()->route('user.lk');
    }
}
