<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Foundation\Http\FormRequest;

class OrderController extends Controller
{
    public function submit(Request $request)
    {

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

        $contact->save();

        return redirect()->route('home');
    }
}
