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
        $contact->otziv = '';

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

        $user = Auth::user();

        $Orders = Order::all();
        $ThisOrder = $Orders->find($id);
        $request = DB::select('select * from orders_requests where order_id = ? and isp_id = ?', [$ThisOrder->id, $user['id']]);

        //dd($request[0]);

        if ($ThisOrder['Zakaz_ID'] == Auth::id())
        {
            $requests = DB::select('select * from orders_requests where order_id=? and accepted = 0', [$id]);

            return view('order_one', ['data' => $ThisOrder, 'requests' => $requests]);

        }


        return view('order_one', ['data' => $ThisOrder, 'request' => $request]);

    }


    public function OrderReady(Request $req)
    {

        $order_id = $req['order_id'];

        return view('order_ready', ['data' => $order_id]);


    }

    public function OrderReadyPost(Request $req)
    {
        $order_id = $req['order_id'];

        DB::update('update orders set status=2 where id=?', [$order_id]);
        DB::update('update orders set otziv = ? where id = ?', [$req['review'], $order_id]);


        $users = DB::select('select * from users');
        $orders = DB::select('select * from orders where id=?', [$order_id]);



/*
 * Хочешь фиксануть все что дальше?
        Ребята не стоит вскрывать эту тему. Вы молодые, шутливые,
        вам все легко. Это не то. Это не Чикатило и даже не архивы спецслужб.
    Сюда лучше не лезть. Серьезно, любой из вас будет жалеть. Лучше закройте тему и забудьте что тут писалось.
    Я вполне понимаю что данным сообщением вызову дополнительный интерес, но хочу сразу предостеречь пытливых - стоп.
    Остальных просто не найдут.
*/

        $order = $orders[0];


        //foreach($orders as $ord)
        //{
         //   $order = $ord;
        //}

        foreach($users as $user)
        {
            if($user->id == $order->IspID)
            {
                $isp_id = $user->id;
                $R = DB::select('select rating from users where id = ?', [$user->id]);

            }

        }

        $rating = $R[0];

        $rating = $rating->rating + (100 * intval($req['rating'])) - 250;

        DB::update('update users set rating = ? where id = ?', [$rating, $isp_id]);

        return redirect()->to(route('user.lk'));

        //КОСТЫЛЬ НА КОСТЫЛЕ И КОСТЫЛЕМ ПОГОНЯЕТ,




    }


}
