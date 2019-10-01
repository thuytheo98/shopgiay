@extends('admin.layout.master')
@section('content')
    <div class="list-cate" style="width: 70%; padding: 30px 30px">
        <div class="header-list-cate">
            <h3>Category</h3>
            <small>list</small>
        </div>
        <hr>
        <div class="main-list-cate">
            <table class="table table-striped" border=1px>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Parent</th>
                    <th>Display_order</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($cates as $cate)
                    <tr>
                        <td>{{$cate->id}}</td>
                        <td>{{$cate->name}}</td>
                        <td>{{$cate->parent_id}}</td>
                        <td>{{$cate->order_display}}</td>
                        <td><a class="glyphicon glyphicon-heart" name="delete">Delete</a></td>
                        <td><a href="admin/danh_muc/sua/{{$cate->id}}" class="glyphicon glyphicon-edit" name="edit">Edit</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection