@extends('admin.layout.master')
@section('content')
    <div class="list-brand"style="width: 70%; padding: 30px 30px">
        <div class="header-list-brand" >
            <h3>Brand</h3>
            <small>list</small>
        </div>
        <div class="main-list-brand">
        <table class="table table-striped" border=1px>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Slug Name</th>
                <th>Description</th>
                <th>Display_order</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
            @foreach($brands as $brand)
                <tr>
                    <td>{{$brand->id}}</td>
                    <td>{{$brand->name}}</td>
                    <td>{{$brand->slug_name}}</td>
                    <td>{{$brand->description}}</td>
                    <td>{{$brand->order_display}}</td>
                    <td><a class="glyphicon glyphicon-heart" name="delete">Delete</a></td>
                    <td><a href="admin/danh_muc/sua/{{$brand->id}}" class="glyphicon glyphicon-edit" name="edit">Edit</a></td>
                </tr>
            @endforeach
        </table>
        </div>
    </div>
@endsection