<?php

namespace App\Http\Controllers;

use App\Models\people;
use App\Models\person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    

    public function index(){


        $data=people::paginate(10);
         return view('persondetail',compact('data'));
        
    }
    public function register_user(Request $request)
    {
        if(isset($request->username) && 
        isset($request->password) &&
        isset($request->email) &&
        isset($request->phone) ){

            $table=new Person();
            $table->username=$request->username;
            $table->email=$request->email;
            $table->password=md5($request->password);
            $table->phno=$request->phone;

            $table->save();

            return [
                "status"=>true,
                "message"=>"Registered Successfully!!",
                "person"=>$table
            ];
            
        }else{
            return [
                "status"=>false,
                "message"=>"Insufficient Parameter ",
                "person"=>null
         ];
            }
    }

    public function login_api(Request $request)
{
    if(isset($request->username) && 
    isset($request->pass) 
    ){

        $username=$request->username;
        $pass=md5($request->pass);

        $table=Person::where('username',$username)
        ->where('password',$pass)->first();        

        if(isset($table)){
        return [
            "status"=>true,
            "message"=>"Login Successfully!!",
            "person"=>$table
        ];
    }else{
        return [
            "status"=>false,
            "message"=>"Incorrect Username or Password",
            "person"=>null
        ];
    }
        
    }else{
        return [
            "status"=>false,
            "message"=>"Insufficient Parameter ",
            "person"=>null
    ];
}
}

public function editProfile(Request $request) {
    if(isset($request->username) &&
    isset($request->phone) &&
    isset($request->id) &&
    isset($request->email) &&
    isset($request->pic)){
        
        $id=$request->id;
        $phone=$request->phone;
        $username=$request->username;
        $email=$request->email;
        $pass=$request->pass;
        $imgName=time()."img1"."."."jpg";
        $image=$request->pic;

        $imgPath=public_path('images')."/".$imgName;
        file_put_contents($imgPath,base64_decode($image));


            $data=Person::whereId($id)->first();
            if(isset($pass))
                $data->pass=$pass;
            $data->phno=$phone;
            $data->email=$email;
            $data->pic=$imgName;
            $data->username=$username;
            $data->save();
            return [
                "status"=>true,
                "message"=>"Updated Successfully!!",
                "person"=>$data
            ];



    }else{
            return [
                "status"=>false,
                "message"=>"Insufficient Parameter ",
                "person"=>null
        ];
}


}
}