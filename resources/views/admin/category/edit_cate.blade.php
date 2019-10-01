@extends('admin.layout.master')
@section('content')
    <div class="edit-cate" style="padding: 30px 30px">
        <div class="header-edit-cate">
            <h3>Danh mục</h3>
            <small>sửa</small>
        </div>
     <hr>
    <div class="main-add-cate" style="width: 30%">
        <form action="admin/danh_muc/sua/{{$item->id}}" method="POST">
            <div class="form-group">
                <label>Danh mục cha</label>
                <select class="form-control" name="selectParentId">
                    <option value="0">Gốc</option>
                    <?php  listcate($cate, 0, $str = "",$item ->parent_id )?>
                </select>
            </div>
            <div class="form-group">
                <label>Category name</label>
                <input class="form-control" name="txtCateName" placeholder="Nhập tên danh mục" value="{!! $item->name!!}"/>
            </div>
            <div class="form-group">
                <label>Slug name</label>
                <input class="form-control" name="txtFullName" placeholder="Nhập tên đầy đủ" value="{!! $item->full_name!!}"/>
            </div>
            <button type="submit" class="btn btn-default">Lưu</button>
            <button type="reset" class="btn btn-default">Hủy</button>
            {{csrf_field()}}
        </form>
    </div>
    </div>
@endsection