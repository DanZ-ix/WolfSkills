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
                $requests = DB::select('select * from orders_requests where isp_id = ?', [Auth::id()]);

                $orders = DB::select('select * from orders');

                $users = DB::select('select * from users');

                return view('profile',['orders' => $orders, 'requests' => $requests, 'users' => $users]);
            }



    }
}
