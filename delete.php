<?php

$id = $_POST['id'];

include_once "model.php";
$model = new Model();
$delete = $model->delete($id);