@extends('admin.layout.master')
@section('content')
    <div class="list-coupon"  style="width: 70%; padding: 30px 30px">
        <div class="header-list-coupon">
            <h2>Mã giảm giá</h2>
            <p>Danh sách</p>
        </div>
        <hr>
        <div class="main-list-coupon">
            <table class="table table-striped" border=1px>
                <tr>
                    <th>ID</th>
                    <th>Tên mã</th>
                    <th>Tỷ lệ</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                <tr>
                    @foreach($coupons as $coupon)
                    <td>{{$coupon->id}}</td>
                    <td>{{$coupon->name}}</td>
                    <td>{{$coupon->value}}</td>
                    <td><a href="admin/coupon/detele{{$coupon->id}}" class="glyphicon glyphicon-heart">Delete</a></td>
                    <td><a href="admin/coupon/edit{{$coupon->id}}" class="glyphicon glyphicon-edit">Edit</a></td>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
@endsection