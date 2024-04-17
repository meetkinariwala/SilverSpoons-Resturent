<?php

namespace App\Http\Controllers;

use App\Models\tablebooking;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class TablebookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function addtablebooking(Request $request){

        if(isset($request->guest) && 
        isset($request->date) &&
        isset($request->time) &&
        isset($request->tnumber)){

            $table=new tablebooking();
            $table->guest=$request->guest;
            $table->date=$request->date;
            $table->time=$request->time;
            $table->tnumber=$request->tnumber;


            $table->save();

            return [
                "status"=>true,
                "message"=>"Table booking Successfully!!",
                "tablebooking"=>$table
            ];
            
        }else{
            return [
                "status"=>false,
                "message"=>"Insufficient Parameter ",
                "tablebooking"=>null
         ];
            }


    }


    public function gettables() {

        $data=tablebooking::get();

    if(isset($data)){
        return [
            "status"=>true,
            "message"=>"getting data...",
            "table"=>$data
        ];
    }else{
        return [
            "status"=>false,
            "message"=>"Empty Cart...",
            "table"=>$data
        ];
    
    }

        
    }


    public function index()
    {
        //
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
    public function show(tablebooking $tablebooking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tablebooking $tablebooking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tablebooking $tablebooking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tablebooking $tablebooking)
    {
        //
    }
}
