@extends('admin.layout.master')
@section('content')
    <div class="list-size" style="width: 70%; padding: 30px 30px">
        <div class="header-list-size">
            <h3>Kích thước</h3>
            <small>list</small>
        </div>
        <hr>
        <div class="main-list-size">
            <table class="table table-striped" border=1>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                <tr>
                    @foreach($sizes as $size)
                     <tr>
                         <td>{{$size->id}}</td>
                         <td>{{$size->name}}</td>
                         <td>
                             <i class="glyphicon glyphicon-heart"></i>
                             <a href="admin/kich_thuoc/xoa/{{$size->id}}">Delete</a>
                         </td>
                         <td>
                             <i class="glyphicon glyphicon-edit"></i>
                             <a href="admin/kich_thuoc/sua/{{$size->id}}">Edit</a>
                         </td>
                     </tr>
                    @endforeach
                </tr>
            </table>
        </div>
    </div>
@endsection
