<?php

namespace App\Http\Controllers;

use App\Models\Cuisin;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data=Menu::paginate(5);
        return view('menu.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        $data=Cuisin::get();
        return view('menu.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'dname'=>'required',
            'ddesc'=>'required',
            'dingre'=>'required',
            'dprice'=>'required | numeric|min:0 ',
            'ctype'=>'required',
            'pic1'=>'required | mimes:png,jpeg,jpg,webp',
            'pic2'=>'mimes:png,jpeg,jpg,webp',
            'pic3'=>' mimes:png,jpeg,jpg,webp',
            'pic4'=>' mimes:png,jpeg,jpg,webp',
        

            
        ]);

        $table= new Menu;


        //image code strat
        $pic1="menu_pic1".time(). "." . $request->pic1->extension();
        $request->pic1->move(public_path("menu_dish"),$pic1);
        $table->pic1=$pic1;

        if(isset($request->pic2)){
        $pic2="menu_pic2".time(). "." . $request->pic2->extension();
        $request->pic2->move(public_path("menu_dish"),$pic2);
        $table->pic2=$pic2;
    }

    if(isset($request->pic3)){
        $pic3="menu_pic3".time(). "." . $request->pic3->extension();
        $request->pic3->move(public_path("menu_dish"),$pic3);
        $table->pic3=$pic3;
    }


    if(isset($request->pic4)){
        $pic4="menu_pic4".time(). "." . $request->pic4->extension();
        $request->pic4->move(public_path("menu_dish"),$pic4);
        $table->pic4=$pic4;
    }

        $table->dishname = $request->dname;
        $table->dishdescription = $request->ddesc;
        $table->ingredient = $request->dingre;
        $table->price = $request->dprice;
        $table->ctype = $request->ctype;

        $table->save();
        return redirect('menu')->withSuccess('inserted successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        //
        $cuisin=Cuisin::all();
        return view('menu.show',compact('menu','cuisin'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        //
        $data=Cuisin::get();
        $cuisin=Cuisin::where('id',$menu->ctype)->first();
        return view('menu.edit',compact('menu','data','cuisin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        //
        $request->validate([
            'dname'=>'required',
            'ddesc'=>'required',
            'dingre'=>'required',
            'dprice'=>'required',
            'ctype'=>'required',
            'pic1'=>' mimes:png,jpeg,jpg,webp',
            'pic2'=>'mimes:png,jpeg,jpg,webp',
            'pic3'=>' mimes:png,jpeg,jpg,webp',
            'pic4'=>' mimes:png,jpeg,jpg,webp',

            
        ]);

        $table= Menu::where('id',$menu->id)->first();


        //image code strat
        if(isset($request->pic1)){
        $pic1="menu_".time(). "." . $request->pic1->extension();
        $request->pic1->move(public_path("menu_dish"),$pic1);
        $table->pic1=$pic1;
        }

        if(isset($request->pic2)){
        $pic2="menu_".time(). "." . $request->pic2->extension();
        $request->pic2->move(public_path("menu_dish"),$pic2);
        $table->pic2=$pic2;
    }
       

    if(isset($request->pic3)){
        $pic3="menu_".time(). "." . $request->pic3->extension();
        $request->pic3->move(public_path("menu_dish"),$pic3);
        $table->pic3=$pic3;
    }


    if(isset($request->pic4)){
        $pic4="menu_".time(). "." . $request->pic4->extension();
        $request->pic4->move(public_path("menu_dish"),$pic4);
        $table->pic4=$pic4;
    }


        //table name is pic 
        // $table->pic2=$pic2;
        // $table->pic3=$pic3;
        // $table->pic4=$pic4;
        //image code end


        $table->dishname = $request->dname;
        $table->dishdescription = $request->ddesc;
        $table->ingredient = $request->dingre;
        $table->price = $request->dprice;
        $table->ctype = $request->ctype;

        $table->save();
        return redirect('menu')->withSuccess('Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        //
        $menu->delete();
        return redirect('menu')->withSuccess('deleted successfully');

    }

    public function  GetMenuApi(){

        $data=Menu::get();
        foreach($data as $item){

            $image=asset('menu_dish')."/".$item->pic1;

            $item->pic1=$image;
        }
        if($data!=null){
            return[
                "status"=>true,
                "message"=>"success",
                "menu"=>$data ];
        }
        else{

            return[
                "status"=>false,
                "message"=>"no data found",
                "menu"=>null];

        }
    
        
    }


    public function  GetMenuApiCat(Request $request){

        $data=Menu::where('ctype',$request->ctype)->get();
        foreach($data as $item){

            $image=asset('menu_dish')."/".$item->pic1;

            $item->pic1=$image;
        }
        if($data!=null){
            return[
                "status"=>true,
                "message"=>"success",
                "menu"=>$data ];
        }
        else{

            return[
                "status"=>false,
                "message"=>"no data found",
                "menu"=>null];

        }
    }
}
