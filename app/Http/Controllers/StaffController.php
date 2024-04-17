<?php

namespace App\Http\Controllers;

use App\Models\staff;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=staff::paginate();
        return view('staff.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([

            'sname' => 'required',
            'designation' => 'required',
            'adhaar' => 'required |numeric' ,
            'address' => 'required',
            'phno' => 'required | numeric',
            'email' => 'required | email'
        ]);


        $table=new staff();

        $table->fullname=$request->sname;
        $table->designation=$request->designation;
        $table->adharno=$request->adhaar;
        $table->phone=$request->phno;
        $table->address=$request->address;
        $table->email=$request->email;
        $table->save();

        return redirect('staff')->withsuccess('inserted successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(staff $staff)
    {
        //
        return view('staff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, staff $staff)
    {
        //
        $request->validate([

            'sname' => 'required',
            'designation' => 'required',
            'adhaar' => 'required |numeric' ,
            'address' => 'required',
            'phno' => 'required | numeric',
            'email' => 'required | email'
        ]);


        $table=staff::where('id',$staff->id)->first();

        $table->fullname=$request->sname;
        $table->designation=$request->designation;
        $table->adharno=$request->adhaar;
        $table->phone=$request->phno;
        $table->address=$request->address;
        $table->email=$request->email;
        $table->save();

        return redirect('staff')->withsuccess('updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(staff $staff)
    {
        //
        $staff->delete();
        return redirect('staff')->withsuccess('deleetd successfully');
    }
}
