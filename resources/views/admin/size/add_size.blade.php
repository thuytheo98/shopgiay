@extends('admin.layout.master')
@section('content')
    <div class="add-size" style="width: 50%; padding: 30px 30px;" >
        <div class="header-add-size">
            <h3>Kích thước</h3>
            <small>add</small>
        </div>
        <div class="main-add-size">
            <form action="" method="post">
            <div class="form-group">
                <label>Size</label>
                <input class="form-control" placeholder="Nhập kích cỡ" name="name">
            </div>
            <div class="button-add-size">
                <button class="btn btn-default" type="submit">Thêm</button>
                <button class="btn btn-default" type="submit">Hủy</button>
            </div>
                {{csrf_field()}}
            </form>
        </div>

    </div>
@endsection