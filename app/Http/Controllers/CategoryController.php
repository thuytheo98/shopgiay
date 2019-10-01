<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DateTime;

class CategoryController extends Controller
{
    function getAddCate(){
        $cate = Category::all()->toArray();

        return view('admin.category.add_cate',compact('cate'));
    }
    function postAddCate(Request $request){
        //lấy dữ liệu:
        $cate= new Category();
        $cate->name=$request->name;
        $cate->order_display=$request->order_display;
        $cate->parent_id=$request->ParentId;
        $cate->created_at= new DateTime;
        $cate->save();
        return redirect(route('listdanhmuc'));
    }
    function getListCate(){
        $cates=Category::all();
        //compact chuyền biến cate vào để dùng
        return view('admin.category.list_cate',compact('cates'));
    }
    public function getEditCate($id){
        $cate=Category::all();
        $item = Category::find($id);

        return view("admin.category.edit_cate",compact('cate','item'));
    }
    public function postEditCate($id , Request $request)
    {
        $cate             = Category::find($id);
        $cate->name       = $request->txtCateName;
        $cate->slug_name  = $request->txtFullName;
        $cate->parent_id  = $request->selectParentId;
        $cate->updated_at = new DateTime;
        $cate->save();

        return redirect('admin/danh_muc/sua/'.$id);
    }


}
