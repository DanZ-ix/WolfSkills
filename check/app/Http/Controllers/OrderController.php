<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function submit(Request $request)
    {
        if (!Auth::check())
        {
            return redirect()->to(route('error'));
        }
        $user = Auth::user();

        if ($user['role']=='Isp')
        {
            return redirect()->to(route('error'));
        }


        $validateFields = $request->validate([
            'title' => ['required', 'max:254'],
            'napravlenie' => 'required',
            'description' => 'required',
            'contacts' => 'required|max:254',
            'deadline' => 'required|max:254',
            'cost' => 'required|max:254'
        ]);


        //dd($request);
        $contact = new Order();
        $contact-> name = $validateFields['title']; //$request->input('name_zakaz');
        $contact-> napravlenie =  $validateFields['napravlenie']; //$request->input('napravlenie');
        $contact-> opisanie =  $validateFields['description']; //$request->input('description');
        $contact-> telephone = $validateFields['contacts']; // $request->input('telephone');
        $contact-> deadline =  $validateFields['deadline']; //$request->input('deadline');
        $contact-> cost =  $validateFields['cost'];    //$request->input('cost');
        $contact-> Zakaz_ID = Auth::id();
        $contact-> status = 0;   //0 - нет исполнителя
                                    //1 - в процессе выполнения
                                    //2 - Выполнен


        $contact->save();

        return redirect()->route('home');
    }


    public function GetOrders()
    {
        $Orders = Order::all();
        return view('order_list', ['data' => $Orders]);

    }

    public function GetOrdersNapr($napr)
    {
        $Orders = DB::select('select * from orders where napravlenie=?', [$napr]);
        //dd($Orders);
        return view('order_list_napr', ['data' => $Orders]);

    }

    public function OneOrder($id)
    {
        $Orders = Order::all();
        return view('order_one', ['data' => $Orders->find($id)]);

    }

}
