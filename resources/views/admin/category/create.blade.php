@extends('layouts.master')
@section('title','Create New Category')
@section('content')
        <div class="col-md-9">
            <h1>Add a category</h1>
            <form action="/admin/category" method="post">
                {{csrf_field()}}
                <div>
                    <label>Name</label>
                    <input class="form-control" name="name" type="text" placeholder="Product name...">
                </div>
                <div>
                    <label>Description</label>
                    <input class="form-control" name="description" type="text" placeholder="Description...">
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