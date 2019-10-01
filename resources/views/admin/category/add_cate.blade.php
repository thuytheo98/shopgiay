@extends('admin.layout.master')
@section('content')
    <div class="add-cate" style="padding: 30px 30px">
    <div class="header-add-cate">
        <h3>Danh mục</h3>
        <small>Thêm</small>
    </div>
    <hr>
    <div class="main-add-cate" style="width: 30%">
    <form action="" method="post">
        <div class="form-group">
            <label>Danh mục cha</label>
            <select class="form-control" name="ParentId">
                <option value="0">Gốc</option>
                <?php  listcate($cate, 0, $str = "", old('ParentId') ) ?>
            </select>
        </div>
        <div class="form-group">
            <label>Category name</label><br>
            <input type="text" class="form-control" name="name"><br>
        </div>
        <div class="form-group">
            <label>Display ordering</label><br>
            <input type="text" class="form-control" name="order_display">
        </div>
        <div class="">
            <button type="submit" name="save" class="btn btn-default">Save</button>
            <button type="submit" name="cancel" class="btn btn-default">Cancel</button>
        </div>
        {{csrf_field()}}
    </form>
    </div>
    </div>
@endsection