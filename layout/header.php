<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
    <style>
        #footer{
            position:fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        background: #9a9a9a;

        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-success">
    <a class="navbar-brand" href="index.php">Dashboard</a>
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">
                        <a class="nav-link " href="#">Show product <span class="sr-only">(current)</span></a>
                    </button>

                    <button class="dropdown-item" type="button">
                        <a class="nav-link " href="create_products.php">create product <span class="sr-only">(current)</span></a>
                    </button>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Category
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <button class="dropdown-item" type="button">Show category</button>
                    <button class="dropdown-item" type="button">Create category</button>
                </div>
            </div>

            <li class="nav-item">
                <a class="nav-link " href="create_products.php">Product <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="getCategories.php">Category <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>

        </ul>


    </div>
</nav>
