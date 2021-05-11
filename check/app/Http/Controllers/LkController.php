<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LkController extends Controller
{
    public function GetAllOrders()
    {
        $user = Auth::user();

        if ($user['role'] == 'Zakaz')
        {
            $orders = DB::select('select * from orders where Zakaz_ID = ?', [Auth::id()]);
            return view('profile', ['orders' => $orders]);
        }
        else
            {
                $requests = DB::select('select * orders_requests where isp_id = ?', [Auth::id()]);

                $orders = DB::select('select * from orders where IspID=?', [Auth::id()]);

                return view('profile',['orders' => $orders, 'requests' => $requests]);
            }



    }
}
