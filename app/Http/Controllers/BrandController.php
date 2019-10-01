<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    function getAddBrand(){
        return view('admin.brand.add_brand');
    }
    function postAddBrand(Request $request){
        $brand= new Brand();
        $brand->name=$request->name;
        $brand->slug_name=$request->slug_name;
        $brand->description=$request->description;
        $brand->order_display=$request->order_display;
        $brand->save();
        return redirect(route('listthuonghieu'));
    }
    function getListBrand(){
        $brands=Brand::all();
        return view('admin.brand.list_brand',compact('brands'));
    }
}
