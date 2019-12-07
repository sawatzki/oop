<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>OOP PHP CRUD</title>
</head>
<body>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">RECORDS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="insert.php">NEW</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col-md-12 mt-5">
            <h1 class="text-center">READ RECORD</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <?php
            include_once "model.php";
            $model = new Model();
            $id = $_REQUEST['id'];
            $row = $model->fetch_single($id);
            if (!empty($row)) { ?>

                <div class="card">
                    <div class="card-header">single record</div>
                    <div class="card-body">
                        <p>Name: <?php echo $row['name']; ?></p>
                        <p>Email: <?php echo $row['email']; ?></p>
                        <p>Mobile: <?php echo $row['mobile']; ?></p>
                        <p>Address: <?php echo $row['address']; ?></p>
                    </div>
                </div>
            <?php }else{
                echo "no data";
            } ?>

        </div>
    </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>