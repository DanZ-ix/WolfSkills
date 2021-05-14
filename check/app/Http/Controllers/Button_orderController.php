<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class Button_orderController extends Controller
{
    public function submit(Request $req)
    {
        $userID = Auth::id();
        DB::insert('insert into orders_requests (order_id, isp_id, zakaz_id, accepted, text) value (?, ?, ?, ?, ?)', [$req['id'],  $userID, $req['Zakaz_ID'], 0, ' ']);


        return redirect()->route('user.lk');
    }

    public function choose(Request $request)
    {
        //dd($request);

        DB::update('update orders set status = 1 where id = ?', [$request['order_id']]);
        DB::update('update orders set IspID = ? where id = ?', [$request['isp_id'] ,$request['order_id']]);
        DB::update('update orders_requests set accepted = 1 where id = ?', [$request['request_id']]);
        //Меняем в заказе поле исполнителя и поле кондиции на 1
        //В ордерс реквестс меняем ассптед на 1

        return redirect()->route('user.lk');
    }
}
