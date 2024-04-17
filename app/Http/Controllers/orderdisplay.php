<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;

class orderdisplay extends Controller
{
    //

    public function index(Request $request){


        $data=orders::latest()->paginate(10);
        return view('order.index',compact('data'));

    }

    public function destroy(orders $orders){

          //
        //   $orders->delete();
        //   return redirect('order')->withSuccess('Order successfully deleted....');
        
    }
}
