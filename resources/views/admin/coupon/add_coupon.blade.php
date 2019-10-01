@extends('admin.layout.master')
@section('content')
    <div class="add-coupon" style="width: 60%;padding: 30px 30px">
        <div class="header-add-coupon">
            <h2>Mã giảm giá</h2>
            <span>Thêm</span>
        </div>
        <hr>
        <div class="main-add-coupon">
            <form action="" method="post">
                <div class="form-group">
                    <label>Tên mã giảm giá</label>
                    <input class="form-control" placeholder="Nhập tên mã giảm giá" name="namecoupon">
                </div>
                <div class="form-group">
                    <label>Tỷ lệ</label>
                    <input class="form-control" placeholder="Tỷ lệ là số lớn hơn 0 và bé hơn 1" name="valuecoupon">
                </div>
                <div>
                    <button class="btn btn-default">Thêm</button>
                    <button class="btn btn-default">Hủy</button>
                </div>
                {{csrf_field()}}
            </form>
        </div>
    </div>
@endsection