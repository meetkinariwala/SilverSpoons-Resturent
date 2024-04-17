<?php

namespace App\Http\Controllers;

use App\Models\coupon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=coupon::latest()->paginate(5);
        return view('coupon.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('coupon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'ccode'=>'required',
            'ctitle'=>'required',
            'cdesc'=>'required',
            'cdiscount'=>'required | numeric',
            'cpic'=>'required | mimes:png,jpeg,jpg,webp'
        ]);

        $table= new coupon;

         //image code strat
         $cpic="coupon_".time(). "." . $request->cpic->extension();
         $request->cpic->move(public_path("coupon"),$cpic);
         //table name is pic 
         $table->pic=$cpic;
         //image code end

         $table->couponcode=$request->ccode;
         $table->coupontitle=$request->ctitle;
         $table->coupondesc=$request->cdesc;
         $table->coupondiscount=$request->cdiscount;

         $table->save();
 
         return redirect('coupons')->withSuccess("inserted successfully");
            

        
    }


    public function getCouponFromCode(Request $request) {
        $couponcode=$request->couponcode;
        if(isset($couponcode)){
    
            $data=coupon::where('couponcode',$couponcode)->first();
            return [
                "status" => true,
                "message" => "getting Coupon found",
                "Coupon" => Array($data)
            ];
    
        }else{
            return [
                "status" => false,
                "message" => "no Coupon found",
                "Coupon" => null
            ];
        }
     }

    /**
     * Display the specified resource.
     */
    public function show(coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(coupon $coupon)
    {
        //
        return view('coupon.edit',compact('coupon'));
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, coupon $coupon)
    {
        //
        $request->validate([

            'ccode'=>'required',
            'ctitle'=>'required',
            'cdesc'=>'required',
            'cdiscount'=>'required | numeric',
            'cpic'=>' mimes:png,jpeg,jpg,webp'
        ]);

        $table=coupon::where('id',$coupon->id)->first();

         //image code strat
         if(isset($request->cpic)){
         $cpic="coupon_".time(). "." . $request->cpic->extension();
         $request->cpic->move(public_path("coupon"),$cpic);
         //table name is pic 
         $table->pic=$cpic;
         }
         //image code end

         $table->couponcode=$request->ccode;
         $table->coupontitle=$request->ctitle;
         $table->coupondesc=$request->cdesc;
         $table->coupondiscount=$request->cdiscount;

         $table->save();
 
         return redirect('coupons')->withSuccess("Updated successfully");
            
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(coupon $coupon)
    {
        //

        $coupon->delete();
        return redirect('coupons')->withsuccess('deleted successfully');
    }


    public function GetCouponApi(){

        $data=coupon::get();
        foreach($data as $item){

            $image=asset('coupon')."/".$item->pic;

            $item->pic=$image;
        }
        if($data!=null){

            return[
                "status"=>true,
                "message"=>"success",
                "Coupon"=>$data];
        }

        else{

            return[
                "status"=>false,
                "message"=>"no data found",
                "Coupon"=>null];


        }

    
        
    }
}
