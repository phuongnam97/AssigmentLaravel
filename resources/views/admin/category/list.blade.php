@extends('layouts.master')
@section('title','List Category')
@section('content')
    <div class="col-md-9">
        <h1>Category list</h1>
        <table style="width:100%">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Edit/Delete</th>
            </tr>
            @foreach($list_obj as $item)
                <tr>
                    <td class="text-center"><a class="a-td" href="/admin/category/{{$item -> id}}">{{$item -> name}}</a></td>
                    <td class="text-center">{{$item->description}}</td>
                    <td class="text-center">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/admin/category/{{$item -> id}}/edit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <span class="btn-delete" id="{{$item-> id}}">Delete</span>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <script>
        var listDeleteButton = document.getElementsByClassName('btn-delete');
        for (var i = 0; i < listDeleteButton.length; i++) {
            listDeleteButton[i].onclick = function () {
                if (confirm('Are you sure ?')) {
                    var params = '_token={{csrf_token()}}';
                    var currentId = this.id;
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("DELETE", "/admin/product/" + currentId, true);
                    xhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            alert('Delete success!');
                            window.location.reload();
                        }
                    };
                    xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                    xhttp.send(params);
                }
            }
        }
    </script>
@endsection

