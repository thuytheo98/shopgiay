<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function getAddCoupon(){
        return view('admin.coupon.add_coupon');
    }
    public function postAddCoupon(Request $request){
        $coupon= new Coupon();
        $coupon->name  = $request->namecoupon;
        $coupon->value = $request->valuecoupon;
        $coupon->save();
        return redirect(route('listcoupon'));
    }
    public function getListCoupon(){
        $coupons=Coupon::all();
        return view('admin.coupon.list_coupon',compact('coupons'));
    }
}
