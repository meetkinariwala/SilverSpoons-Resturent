<?php

namespace App\Http\Controllers;

use App\Models\Cuisin;
use Illuminate\Http\Request;

class CuisinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

           //insert code
        $data=Cuisin::Paginate(5);
        //return view is use to diplay the output in chrome
        return view('cuisin.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cuisin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cname'=>'required | Unique:cuisins',
            'cpic'=> 'required | extensions:png,jpg,jpeg,webp'
        ]);


        $table= new cuisin;

        //image code strat
        $imgname="cuisin_".time(). "." . $request->cpic->extension();
        $request->cpic->move(public_path("cuisin"),$imgname);
        //table name is pic 
        $table->pic=$imgname;
        //image code end

        $table->cname=$request->cname;
        $table->save();

        return redirect('cuisins')->withSuccess("inserted successfully");


     
    }

    /**
     * Display the specified resource.
     */
    public function show(Cuisin $cuisin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cuisin $cuisin)
    {
        

        //compact  pass cuisin
        return view('cuisin.edit',compact('cuisin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cuisin $cuisin)
    {
        //

        $request->validate([
            'cname'=>'required',
            'cpic'=> ' extensions:png,jpg,jpeg,webp'
        ]);

        //First():u can get only one row
        $table=  cuisin::where('id',$cuisin->id)->first();

        if(isset($request->cpic)){
        //image code strat
        $imgname="cuisin_".time(). "." . $request->cpic->extension();
        $request->cpic->move(public_path("cuisin"),$imgname);
        //table name is pic 
        $table->pic=$imgname;
        //image code end
        }

        $table->cname=$request->cname;
        $table->save();

        return redirect('cuisins')->withSuccess("Updated successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cuisin $cuisin)
    {
        //
        $cuisin->delete();
        return redirect('cuisins')->withSuccess("Deleted successfully");


    }

    public function GetCuisinApi(){

        $data= Cuisin::get();
        foreach($data as $item){

            $image=asset('cuisin')."/".$item->pic;
            $item->pic=$image;

        }
        if($data!=null){
        return [
            "status"=>true,
            "message"=>"success",
            "cuisins"=>$data];
        }
        else{
            return [
                "status"=>false,
                "message"=>"no data found",
                "cuisins"=>null];

        }

    }
}
