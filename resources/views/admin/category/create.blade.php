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

        #categoryMenu{
            margin-left: 25px;
        }

        #productMenu{
            margin-left: 25px;
        }

        .navbar-brand{
            text-align: center;
        }
    </style>
</head>
<body>
<header id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand"><span><img src="http://acgblog.org/wp-content/uploads/2015/11/MOC-Icon-300x291.jpg" height="30px" width="30px"></span> Moc Company</a>
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
                            <a href="/admin/product"><span class="glyphicon glyphicon-home"></span> Homepage</a>
                        </li>
                        <li class="li-1">
                            <a href="#" data-toggle="collapse" data-target="#categoryMenu">
                                Category <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                        </li>

                        <ul id="categoryMenu" class="list-unstyled">
                            <li class="li-1"><a href="/admin/category"><span class="glyphicon glyphicon-list"></span> List category</a></li>
                            <li class="li-1"><a href="/admin/category/create"><span class="glyphicon glyphicon-plus"></span>
                                    Create new category</a></li>
                        </ul>

                        <li class="li-1">
                            <a href="#" data-toggle="collapse" data-target="#productMenu">
                                Product <span class="glyphicon glyphicon-chevron-down"></span>
                            </a>
                            <ul id="productMenu" class="list-unstyled">
                                <li class="li-1">
                                    <a href="/admin/product"><span class="glyphicon glyphicon-list"></span> List product </a>
                                </li>
                                <li class="li-1">
                                    <a href="/admin/product/create"><span class="glyphicon glyphicon-plus"></span> Add new product</a>
                                </li>
                            </ul>
                        </li>



                    </ul>
                </li>
            </ul>
        </div>
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
    </div>
</div>
</body>
</html>