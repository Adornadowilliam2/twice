<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request){
        $validator = validator($request->all(), [
            "name" => "required|unique:users",
            "groupname" => "required|min:4|string",
            "country" => "required|min:4",
            "age" => "required|numeric",
            "thumbnail" => "required|string"
        ]);

        if($validator->fails()){
            return response()->json(
                [
                "ok"=> false,
                "message"=> "Request didn't pass validation",
                "errors"=> $validator->errors()
                ]
            );
        }


        $user = User::create($validator->validated());

        return response()->json(
           [ 
            "ok"=> true,
           "message"=> "User has been created",
           "data"=> $user
           ] 
        );
    }

    public function retrieve(Request $request){
       
        return response()->json(
            [ 
             "ok"=> true,
            "message"=> "User has been retrieved",
            "data"=> User::all()
            ] 
         );
    }

    public function update(Request $request){
        $data = $request->all();
        $validator = validator($data, [
            'id' => 'required',
            'name' => 'required',
            'groupname' => 'required',
            'country' => 'required',
            "age" => "required|numeric",
            "thumbnail" => "required|string"
        ]);

        if($validator->fails()){
            return response()->json([
                "ok"=>false,
                "message"=>"Request didn't pass validation",
                "error"=>$validator->errors()
            ]);
        }

    
        try {
            User::where('id',$data['id'])
            ->update([
                'name'=>$data['name'],
                'groupname'=>$data['groupname'],
                'country'=>$data['country'],
                'age'=>$data['age'],
                'thumbnail'=>$data['thumbnail'],
            ]);
            return response()->json([
                "ok"=>true,
                "message"=>"User has been updated",
                "data" => $data
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return response()->json([
                "ok"=>false,
                "message"=>"Request didn't pass validation",
                "error"=>$validator->errors()
            ]);
        }

    }

    public function delete(Request $request){
        $data = $request->all();
        $validator = validator($data, [
            'id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json([
                "ok"=>false,
                "message"=>"Request didn't pass validation",
                "errors"=>$validator->errors()
            ]);
        }

        if(User::where('id',$data['id'])->delete()){
            return response()->json([
                "ok"=> true,
                "message" => "User has been deleted",
                "data" => $data
            ]);
        }
    }

}
