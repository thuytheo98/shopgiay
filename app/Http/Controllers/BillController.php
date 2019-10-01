<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Coupon;
use App\Customer;
use Illuminate\Http\Request;

class BillController extends Controller
{
    function getListBill(){
        $bill=Bill::all();
        $customer=Customer::all();
        $coupon=Coupon::all();
        return view('admin.bill.list_bill',compact('customer','bill'),compact('coupon'));
    }
}
