<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function add_user(Request $request){
        $data['name'] = $request->post('username');
        $data['password'] = $request->post('password');
        $data['type'] = 1;
        $res = UsersModel::insert($data);
        if($res){
            return redirect('logina');
        }else{
            return redirect('register');
        }

    }

    public  function user_login(Request $request){
        $name = $request->post('username');
        $password = $request->post('password');
        $find = UsersModel::where('name',$name)->first();
        if(!$find){
            return "<script>alert('用户不存在');window.history.back()</script>";
        }else{
            if($password == $find['password']){
                return  redirect('practice');
            }else{
                return "<script>alert('密码错误');window.history.back()</script>";
            }
        }
    }




}
