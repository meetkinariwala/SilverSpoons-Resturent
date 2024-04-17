<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function login(Request $request) {

        $username=$request->username;
        $password=$request->password;


        if(strcmp($username,"admin")==0 && strcmp($password,"admin")==0){
            return redirect("/admin");
        }else{
            return back()->withSuccess("Username or Password not matched");
        }
        
     }
    public function index()
    {
        $banners=Banner::latest()->paginate(5);
        return view('banner.index',compact('banners'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('banner.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'pic'=>'required | extensions:jpg,png,jpeg',
        ]);
        $table=new Banner();
        $table->btitle=$request->title;
        $imgName=time()."_banner".".".$request->pic->extension();
        $request->pic->move(public_path('banner'),$imgName);
        $table->pic=$imgName;
        if(strcmp($request->status,"on")==0){
            $table->status=true;
        }
        else{
            $table->status=false;
        }
        $table->save();
        return redirect('banners')->withSuccess("Inserted Successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(banner $banner)
    {
        return view('banner.edit',compact('banner'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, banner $banner)
    {
        $request->validate([
            'title'=>'required',
            'pic'=> 'extensions:jpg,png,jpeg',
        ]);

        $table=Banner::where('id',$banner->id)->first();

        $table->btitle=$request->title;

        if(isset($request->pic)){

            $imgName=time()."_banner".".".$request->pic->extension();
            $request->pic->move(public_path('banner'),$imgName);
            $table->pic=$imgName;
        }
       
        if(strcmp($request->status,"on")==0){
            $table->status=true;
        }
        else{
            $table->status=false;
        }
        $table->save();
        return redirect('banners')->withSuccess("Inserted Successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(banner $banner)
    {
        //
        $banner->delete();
        return redirect('banners')->withSuccess("deleted successfully!!!");

    }

    public function getBannerDataApi(){

        $data= banner::where('status','1')->get();
        foreach($data as $item){

            $image=asset('banner')."/".$item->pic;

            $item->pic=$image;

        }
        if($data!=null){
        return [
            "status"=>true,
            "message"=>"success",
            "baneers"=>$data];
        }
        else{
            return [
                "status"=>false,
                "message"=>"no data found",
                "baneers"=>null];

        }
    }
}
