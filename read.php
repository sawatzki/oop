<?php
$id = $_POST['id'];

include_once "model.php";

$model = new Model();

$row = $model->read($id);

if(!empty($row)){ ?>
    <p><?= $row['title'] ?></p>
    <p><?= $row['description'] ?></p>
<?php } ?>
