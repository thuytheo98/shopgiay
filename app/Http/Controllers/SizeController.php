<?php

namespace App\Http\Controllers;

use App\Size;
use DateTime;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    function getAddSize(){
        return view('admin.size.add_size');
    }
    function postAddSize(Request $request){
        $size=new Size();
        $size->name=$request->name;
        $size->save();
        return redirect(route('listkichthuoc'));
    }
    function getListSize(){
        $sizes=Size::all();
        return view('admin.size.list_size',compact('sizes'));
    }
    public function getEditSize($id){
        $size=Size::find($id);
        return view('admin.size.edit_size',compact('size'));
    }
    public function postEditSize($id , Request $request){
        $edit_size= Size::find($id);

        $edit_size->name=$request->name_value;
        $edit_size->updated_at = new DateTime;
        $edit_size->save();

        return redirect(route('listkichthuoc'));
    }
}
