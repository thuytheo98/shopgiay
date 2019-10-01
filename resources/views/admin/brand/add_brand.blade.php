@extends('admin.layout.master')
@section('content')
    <div class="add-brand" style="padding: 30px 30px">
        <div class="header-add-brand">
            <h3>Brand</h3>
            <small>add</small>
        </div>
        <hr>
        <div class="main-add-brand" style="width: 30%">
            <form action="" method="post">
                <div class="form-group">
                    <label>Name</label><br>
                    <input type="text" class="form-control" name="name"><br>
                </div>
                <div class="form-group">
                    <label>Slug Name</label><br>
                    <input type="text" class="form-control" name="slug_name"><br>
                </div>
                <div class="form-group">
                    <label>Description</label><br>
                    <input type="text" class="form-control" name="description"><br>
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