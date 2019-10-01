@extends('admin.layout.master')
@section('content')
    <div class="add-bill" style="width: 70%; padding: 30px 30px">
        <div class="header-add-bill">
            <h3>Bill</h3>
            <small>add</small>
        </div>
        <div class="main-add-bill">
           <table class="table table-striped">
               <tr>
                   <th>ID</th>
                   <th>Customer name</th>
                   <th>Email</th>
                   <th>Coupon name</th>
                   <th>Date</th>
                   <th>Total</th>
                   <th>Delete</th>
                   <th>Edit</th>
               </tr>
               <tr>
                   @foreach($customer as $cus)
                       @foreach($bill as $bill)
                    <td>{{$bill->id}}</td>
                    <td>{{$cus->name}}</td>
                    <td>{{$cus->email}}</td>
                    <td></td>
                    <td>{{$bill->created_at}}</td>
                    <td>{{$bill->total_price}}</td>
                    <td><a href="admin/don_hang/xoa/{{$bill->id}}" class="glyphicon glyphicon-heart" name="delete">Delete</a></td>
                    <td><a href="admin/don_hang/sua/{{$bill->id}}" class="glyphicon glyphicon-edit" name="edit">Edit</a></td>
                       @endforeach
                   @endforeach
               </tr>
           </table>
        </div>
    </div>
@endsection