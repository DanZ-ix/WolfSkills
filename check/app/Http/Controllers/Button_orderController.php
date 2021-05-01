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
        DB::insert('insert into orders_requests (order_id, isp_id, zakaz_id, accepted) value (?, ?, ?, ?)', [$req['id'],  $userID, $req['Zakaz_ID'], 0]);


        return redirect()->route('user.lk');
    }
}
