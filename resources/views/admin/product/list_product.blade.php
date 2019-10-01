@extends('admin.layout.master')
@section('content')
    <div class="list-product" style="padding: 30px 30px;">
        <div class="header-list-product">
            <h3>Product</h3>
            <small>list</small>
        </div>
        <hr>
        <div class="main-list-product">
            <table class="table table-striped" border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Meta_name</th>
                    <th>Image_product</th>
                    <th>Description</th>
                    <th>Detail</th>
                    <th>Unit_price</th>
                    <th>Promotion_price</th>
                    <th>New</th>
                    <th>Created_at</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->meta_name}}</td>
                        <td>{{$product->image_product}}</td>
                        <td>{{$product->description}}</td>
                        <td>{{$product->detail}}</td>
                        <td>{{$product->unit_price}}</td>
                        <td>{{$product->promotion_price}}</td>
                        <td>{{$product->new}}</td>
                        <td>{{$product->created_at}}</td>
                        <td><a class="glyphicon glyphicon-heart" name="delete">Delete</a></td>
                        <td><a class="glyphicon glyphicon-edit" name="edit">Edit</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection