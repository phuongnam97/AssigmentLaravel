<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product list</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        table, th, td {
            font-family: arial, sans-serif;
            border-collapse: collapse;
        }

        th {
            padding: 20px;
            text-align: center;
        }

        .li-1 {
            margin-top: 30px;
        }

        td, th {
            border: 1px solid #dddddd;
        }

        a-td {
            text-decoration: none;
            color: black;
        }

    </style>
</head>
<body>
<header id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Signup</a></li>
                <li><a href="#">Login</a></li>
            </ul>
        </div>
    </div>
</header>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <ul class="list-unstyled">
                <li class="nav-header">
                    <a href="#" data-toggle="collapse" data-target="#userMenu">
                        Setting <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul style="height: auto;" class="list-unstyled in" id="userMenu">
                        <li class="active li-1">
                            <a href="/admin/comestic"><span class="glyphicon glyphicon-home"></span> Homepage</a>
                        </li>
                        <li class="li-1"><a href="/admin/comestic/create"><span class="glyphicon glyphicon-plus"></span>
                                Create new product</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <h1>Product list</h1>
            <table style="width:100%">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Note</th>
                    <th>Edit/Delete</th>
                </tr>
                @foreach($list_obj as $item)
                    <tr>
                        <td><a class="a-td" href="/admin/article/{{$item -> id}}">{{$item -> name}}</a></td>
                        <td>{{$item->description}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->category}}</td>
                        <td><img src="{{$item->images}}" alt="" style="width: 100px; border-radius: 50%"/></td>
                        <td>{{$item->content}}</td>
                        <td>{{$item->note}}</td>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="/admin/animal/{{$item -> id}}/edit">Edit</a>
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
    </div>
</div>
<script>
    var listDeleteButton = document.getElementsByClassName('btn-delete');
    for (var i = 0; i < listDeleteButton.length; i++) {
        listDeleteButton[i].onclick = function () {
            if (confirm('Are you sure ?')) {
                var params = '_token={{csrf_token()}}';
                var currentId = this.id;
                var xhttp = new XMLHttpRequest();
                xhttp.open("DELETE", "/admin/comestic/" + currentId, true);
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
</body>
</html>