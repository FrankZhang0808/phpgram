<?php

namespace App\Http\Controllers;

use App\Models\PracticeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use phpseclib3\Crypt\EC;

class PracticeController extends Controller
{
    public  function list(){
        $data = PracticeModel::all()->toArray();

        return view('practice',['data'=>$data]);
    }

    public  function indexs(Request $request){
        $employer = $request->get('employer');
        $type = $request->get('type');
        if($type && $employer){
            $data = PracticeModel::where('employer',$employer)->where('type',$type)->get()->toArray();
        }elseif ($employer){
            $data = PracticeModel::where('employer',$employer)->get()->toArray();
        }elseif ($type){
            $data = PracticeModel::where('type',$type)->get()->toArray();
        }else{
            $data = PracticeModel::all()->toArray();
        }

        return view('index',['data'=>$data]);
    }


    public function practice_add(Request $request){
        $file = $request->file('file');
        $path  =  $file->store('/','public');
        // 获取文件后缀名
        $extension = $file->getClientOriginalExtension();
        // 提取文件名
        $filename = pathinfo($path, PATHINFO_FILENAME);
        $data = $_POST;
        unset($data['_token']);
        $data['img'] = $filename.'.'.$extension;

        $res = PracticeModel::insert($data);
        if($res){
            return redirect('practice');
        }else{
            return  redirect('practice_add');
        }
    }

    public function practice_find(Request $request){
        $id = $request->get('id');
        $find = PracticeModel::where('id',$id)->first();
        return view('practice_find',['find'=>$find]);
    }


    public function practice_update(Request $request){
        $data = $request->post();
        $file = $request->file('file');

        unset($data['_token']);
        if(!empty($file)){
            $path  =  $file->store('/','public');
            // 获取文件后缀名
            $extension = $file->getClientOriginalExtension();
            // 提取文件名
            $filename = pathinfo($path, PATHINFO_FILENAME);
            Storage::putFileAs('public/images', $file, $filename);
            $data['img'] = $filename.'.'.$extension;
        }
        $res = DB::table('practices')->where('id',$data['id'])->update($data);
        if($res){
            return redirect('practice');
        }else{
            return "<script>alert('修改失败');window.history.back()</script>";
        }
    }

}
