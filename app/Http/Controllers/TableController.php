<?php

namespace App\Http\Controllers;

use App\Models\table;
use App\Models\tablebooking;
use Illuminate\Http\Request;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=tablebooking::paginate(5);
        return view('table.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data=table::get();
        return view('table.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request ->validate([
        
        'tname'=>'required',
        'tdesc'=>'required',
        'tpic1'=> 'required | mimes:png,jpeg,jpg,webp',
        'tpic2'=> 'mimes:png,jpeg,jpg,webp',
        'tpic3' => 'mimes:png,jpeg,jpg,webp',
        ]);


        $table = new table;

         //image code strat
         $pic1="table_pic1".time(). "." . $request->tpic1->extension();
         $request->tpic1->move(public_path("table_pic"),$pic1);
         $table->pic1=$pic1;

         if(isset($request->tpic2)){
            $pic2="table_pic2".time(). "." . $request->tpic2->extension();
            $request->tpic2->move(public_path("table_pic"),$pic2);
            $table->pic2=$pic2;
         }


         if(isset($request->tpic3)){
            $pic3="table_pic3".time(). "." . $request->tpic3->extension();
            $request->tpic3->move(public_path("table_pic"),$pic3);
            $table->pic3=$pic3;
         }


        $table->tablename = $request->tname;
        $table->tabledescription = $request->tdesc;

        $table->save();
        return redirect('table')->withsuccess('inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(table $table)
    {
        //
       return view('table.edit',compact('table'));
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, table $table)
    {
        //
        $request ->validate([
        
            'tname'=>'required',
            'tdesc'=>'required',
            'tpic1'=> ' mimes:png,jpeg,jpg,webp',
            'tpic2'=> 'mimes:png,jpeg,jpg,webp',
            'tpic3' => 'mimes:png,jpeg,jpg,webp',
            ]);
    
    
            $table=table::where('id',$table->id)->first();
    
             //image code strat
             if(isset($request->tpic1)){
             $pic1="table_pic1".time(). "." . $request->tpic1->extension();
             $request->tpic1->move(public_path("table_pic"),$pic1);
             $table->pic1=$pic1;
             }
    
             if(isset($request->tpic2)){
                $pic2="table_pic2".time(). "." . $request->tpic2->extension();
                $request->tpic2->move(public_path("table_pic"),$pic2);
                $table->pic2=$pic2;
             }
    
    
             if(isset($request->tpic3)){
                $pic3="table_pic3".time(). "." . $request->tpic3->extension();
                $request->tpic3->move(public_path("table_pic"),$pic3);
                $table->pic3=$pic3;
             }
    
    
            $table->tablename = $request->tname;
            $table->tabledescription = $request->tdesc;
    
            $table->save();
            return redirect('table')->withsuccess('Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(table $table)
    {
        //
        $table->delete();
        return redirect('table')->withsuccess("deleted successfully");
    }
}
