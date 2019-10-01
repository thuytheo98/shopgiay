<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use DateTime;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function getAddProduct(){
        $cates=Category::all();
        $brands=Brand::all();
        //compact chuyền biến cate vào để dùng
        return view('admin.product.add_product',compact('cates'),compact('brands'));
    }
    function postAddProduct(Request $request){
        $product=new Product();
        $product->name=$request->name;
        $product->slug_name=$request->slug_name;
        $product->meta_name=$request->meta_name;
        $product->image_product=$request->image_product;
        /*$tmp_image=$product["tmp_name"];
        $name_image=$product["name"];
        move_uploaded_file($tmp_image,"./public/images/$name_image");*/
        $product->description=$request->description;
        $product->detail=$request->detail;
        $product->unit_price=$request->unit_price;
        $product->promotion_price=$request->promotion_price;
        $product->cate_id=$request->category;
        $product->brand_id=$request->brand;
        $product->new=$request->new;
        $product->created_at= new DateTime;
        $product->save();
        return redirect(route('listsanpham'));
    }
    function getListProduct(){
        $products=Product::all();
        return view('admin.product.list_product',compact("products"));
    }

}
