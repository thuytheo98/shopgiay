@extends('admin.layout.master')
@section('content')
    <div class="add-product" style="padding: 30px 30px">
        <div class="header-add-product">
            <h3>Product</h3>
            <small>Add</small>
        </div>
        <hr>
        <div class="main-add-product" style="width: 30%">
            <form action="" method="post">
                <div class="form-group">
                    <label>Name:</label><br>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label>Slug Name:</label><br>
                    <input type="text" class="form-control" name="slug_name">
                </div>
                <div class="form-group">
                    <label>Meta Name:</label><br>
                    <input type="text" class="form-control" name="meta_name">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image_product">
                </div>
                <div class="form-group">
                    <label>Description</label><br>
                    <input type="text" class="form-control" name="description">
                </div>
                <div class="form-group">
                    <label>Detail</label><br>
                    <input type="text" class="form-control" name="detail">
                </div>
                <div class="form-group">
                    <label>Unit price</label><br>
                    <input type="text" class="form-control" name="unit_price">
                </div>
                <div class="form-group">
                    <label>Promotion_price</label><br>
                    <input type="text" class="form-control" name="promotion_price">
                </div>
                <div class="form-group">
                    <label>Category</label><br>
                    <select name="category" class="form-control">
                        @foreach($cates as $cate)
                        <option value="{{$cate->id}}">{{$cate->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Brand</label><br>
                    <select name="brand" class="form-control">
                        @foreach($brands as $brand)
                        <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>New</label><br>
                    <input type="text" class="form-control" name="new">
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