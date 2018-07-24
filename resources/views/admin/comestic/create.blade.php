<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new product</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .li-1 {
            margin-top: 30px;
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
                <li><a href="#">Signup</a> </li>
                <li><a href="#">Login</a> </li>
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
                        <li class="li-1"><a href="/admin/comestic/create"><span class="glyphicon glyphicon-plus"></span> Create new product</a> </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="col-md-9">
            <h1>Add a product</h1>
            <form action="/admin/comestic" method="post">
                {{csrf_field()}}
                <div>
                    <label>Name</label>
                    <input class="form-control" name="name" type="text" placeholder="Product name...">
                </div>
                <div>
                    <label>Description</label>
                    <input class="form-control" name="description" type="text" placeholder="Description...">
                </div>
                <div>
                    <label>Price</label>
                    <input class="form-control" name="price" type="text" placeholder="Price...">
                </div>
                <div>
                    <label>Category</label>
                    <select name="category" class="form-control">
                        <option >Lipstick</option>
                        <option>Lip Gloss</option>
                        <option>Lip Pencil</option>
                    </select>
                </div>
                <div>
                    <label>Image URL</label>
                    <input class="form-control" name="images" type="text" placeholder="Image URL...">
                </div>
                <div>
                    <label>Content</label>
                    <input class="form-control" name="content" type="text" placeholder="Content...">
                </div>
                <div>
                    <label>Note</label>
                    <input class="form-control" name="note" type="text" placeholder="Note...">
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
    </div>
</div>
</body>
</html>