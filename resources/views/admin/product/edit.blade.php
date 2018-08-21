@extends('layouts.master')
@section('title','Edit Product')
@section('content')
        <div class="col-md-9">
            <h1>Add a product</h1>
            <form action="/admin/product" method="post">
                {{csrf_field()}}
                <div>
                    <label>Name</label>
                    <input class="form-control" name="name" type="text" value="{{$obj->name}}">
                </div>
                <div>
                    <label>Description</label>
                    <input class="form-control" name="description" type="text" value="{{$obj->description}}">
                </div>
                <div>
                    <label>Price</label>
                    <input class="form-control" name="price" type="text" value="{{$obj->price}}">
                </div>
                <div>
                    <label>Category</label>
                    <select name="category" class="form-control">
                        @foreach($category as $item)
                            <option >{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label>Image URL</label>
                    <input class="form-control" name="images" type="text" value="{{$obj->images}}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class="form-control" type="submit" value="Submit">
                    </div>
                    <div class="col-md-6">
                        <input class="form-control" type="reset" value="Reset">
                    </div>
                </div>
            </form>
        </div>
@endsection