<?php

namespace App\Http\Controllers;

use App\Models\Cuisin;
use App\Models\Menu;
use App\Models\orders;
use App\Models\people;
use App\Models\person as ModelsPerson;
use App\Models\table;
use App\Models\tablebooking;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function addOrders(Request $request){

        if(isset($request->uid)
        &&isset($request->pid)
        &&isset($request->pname)
        &&isset($request->ppic)
        &&isset($request->amount)
        &&isset($request->total_amount)
        ){
            $data=orders::where('status','0')
            ->where('pid',$request->pid)
            ->where('uid',$request->uid)->first();
            if(isset($data)){
                $data->quantity=$data->quantity+1;
                $data->save();
                return [
                    "status"=>true,
                    "message"=>"Added to Cart!!!",
                    "order"=>Array($data)
                ];  
            }else{

            $table=new orders();
            $table->uid=$request->uid;
            $table->pid=$request->pid;
            $table->pname=$request->pname;
            $table->ppic=$request->ppic;
            $table->amount=$request->amount;
            $table->Total_amount=$request->total_amount;
            $table->save();

            return [
                "status"=>true,
                "message"=>"Added to Cart!!!",
                "order"=>Array($table)
            ];  
        }

        }

            else{

                return [
                    "status"=>false,
                    "message"=>"Insufficient Parameter",
                    "order"=>null
                ];
            }
        



        }
        

    
        public function getOrders(Request $request) {

            $data=orders::where('status','0')
        ->where("uid",$request->uid)
        ->get();
        if(isset($data)){
            return [
                "status"=>true,
                "message"=>"getting data...",
                "order"=>$data
            ];
        }else{
            return [
                "status"=>false,
                "message"=>"Empty Cart...",
                "order"=>$data
            ];
        
        }

        }

        public function getOrdersCompleted(Request $request) {
            $data=orders::where('status','!=','0')
        ->where("uid",$request->uid)
        ->get();
        if(isset($data)){
            return [
                "status"=>true,
                "message"=>"getting data...",
                "order"=>$data
            ];
        }else{
            return [
                "status"=>false,
                "message"=>"Empty Cart...",
                "order"=>$data
            ];
        
        }

        }

       

        public function updateQty(Request $request)  {
            $table=orders::where('id',$request->id)->first();
            $table->quantity=$request->quantity;
            $table->total_amount=$request->quantity * $table->amount;
            $table->save();
            return [
                "status"=>true,
                "message"=>"Cart Qty update",
                "order"=>Array($table)
            ];
        }
    
    
        public function removeOrder(Request $request)  {
            $table=orders::where('id',$request->id)->delete();
            return [
                "status"=>true,
                "message"=>"Removed from Cart!!!",
                "order"=>null
            ];
            
        }

        public function makePayment(Request $request) {
            if(isset($request->uid)){
                $data=orders::where('status','0')
                ->where('uid',$request->uid)->get();
                foreach($data as $item){
                    $item->status=1;
                    $item->total_amount=$request->total_amount;

                    $item->payment_type=$request->payment_type;
                    $item->save();
                }
                return
                ['status'=>true,
                'message'=>"success",
                'data'=>$data];
            }else{
                return
                ['status'=>false,
                'message'=>"no ddata",
                'data'=>null];
            }
        }


    public function index()
    {
        //
        // $users=Cuisin::get();
        $data=orders::latest()->paginate(5);
        $orders=orders::count();
        $menu=Menu::count();
        $totaltable=tablebooking::count();
        $totaluser=people::count();
        $totalrevenue=orders::sum('Total_amount');
        return view('adminhome',compact('data','orders','menu','totaluser','totalrevenue','totaltable'));
        

    }


    public function updateOrder($id) {
        $order=orders::whereId($id)->first();
        $order->status=$order->status+1;
        $order->save();
        return back();
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(orders $orders)
    {
        //
        return view('order.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, orders $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(orders $orders)
    {
      
    }



    public function getOrdersApi(Request $request) {

        $data=orders::get();
    if(isset($data)){
        return [
            "status"=>true,
            "message"=>"Success",
            "order"=>$data
        ];
    }else{
        return [
            "status"=>false,
            "message"=>"no data found",
            "order"=>$data
        ];
    
    }

    }

    public function getCountOfCart(Request $request){
        $count=orders::where('uid',$request->uid)->where('status','0')->count();

        if(isset($count)){
            return[
                "status"=>"true",
                "message"=>"count",
                "count"=>$count
            ];
        }
        else{
            return[
                "status"=>"False",
                "message"=>"Cart 0",
                "count"=>$count
            ];
        }

       
    }
}
