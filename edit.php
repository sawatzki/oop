<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>PHP OOP CRUD</title>
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
            <h1 class="text-center">PHP OOP CRUD PRACT</h1>
            <hr style="height: 1px; color: black; background-color: black;">
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 mx-auto">
            <?php
            include_once "model.php";
            $model = new Model();
            $id = $_REQUEST['id'];
            $row = $model->edit($id);

            if (isset($_POST['update'])) {

                if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])) {
                    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])) {

                        $data['id'] = $id;
                        $data['name'] = $_POST['name'];
                        $data['email'] = $_POST['email'];
                        $data['mobile'] = $_POST['mobile'];
                        $data['address'] = $_POST['address'];

                        $update = $model->update($data);

                        if ($update){
                            echo "<script>alert('record success fully')</script>";
                            echo "<script>window.location.href = 'index.php'</script>";
                        }else{
                            echo "<script>alert('empty')</script>";
                            echo "<script>window.location.href = 'index.php'</script>";
                        }

                    } else {
                        echo "<script>alert('record update failed')</script>";
                        header('Location: edit.php?id=$id');
                    }
                }

            }

            ?>

            <form action="" method="post">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Mobile No.</label>
                    <input type="text" name="mobile" class="form-control" value="<?= $row['mobile'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Address</label>
                    <textarea type="text" name="address" cols="" rows="3" class="form-control"><?= $row['address'] ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </form>
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