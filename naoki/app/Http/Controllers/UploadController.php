<?php

namespace App\Http\Controllers;

use App\Http\Requests\Picture_Request;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Field;
use App\Models\Picture;

class UploadController extends Controller
{
    public function postimg (){
        $company_member = Field::all();
        return view ('img',['company_member' => $company_member]);
    }

    public function saveimg (Picture_Request $request){

        $inputs = $request -> all();
        $field_id = $inputs['field_id'];
        $picture_take_date = $inputs['take_time'];
        $randam_number = str_pad(mt_rand(0,99999999),8,0, STR_PAD_LEFT);

        $picture_name = $randam_number.'.'.$request->file('post_img')->extension();

        if($request->file('post_img')->extension() == 'jpg'
        || $request->file('post_img')->extension() == 'jpeg'
        || $request->file('post_img')->extension() == 'gif'
        || $request->file('post_img')->extension() == 'png'){

            $request->file('post_img')->storeAs('public/test',$picture_name);
            Picture::create([
                'file_name' => $picture_name,
                'picture_date' => $picture_take_date,
                'field_id' => $field_id,
            ]);
            \Session::flash('err_msg', '写真を登録しました。');
            return redirect ('/create3');


        }

        \Session::flash('err_msg', '写真を登録できませんでした。');
        return redirect ('/create3');
    }

    public function Picture_list(){

        $lists = \DB::table('companys')->join('fields','fields.customer_id','=','companys.id')->get();
        return view('picture_list')->with('lists',$lists);

    }

    public function Picture_list_show($id){

        $pictures = Picture::where('field_id',$id)->get();
        //dd($pictures -> first() -> file_name);

        return view('picture_show_page',['pictures' => $pictures]);

    }

    public function Picture_delete($id,$id2){

        $picture = Picture::where('id',$id)->get()->first();
        $del_path = storage_path().'/app/public/test/'.$picture -> file_name;
        \File::delete($del_path);

        if(empty($id)){
            \Session::flash('err_msg2','データがありません。');
            return redirect()->action([UploadController::class, 'Picture_list_show'], ['id' => $id2]);
        }

        try{
        Picture::destroy($id);
        }catch(\Throwable $e){
            abort(500);
        }

        \Session::flash('err_msg2','データを削除しました。');
        return redirect()->action([UploadController::class, 'Picture_list_show'], ['id' => $id2]);

    }


}
