<?php

require_once "model.php";



if (isset($_POST['update'])) {
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['id'])) {
        if (!empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['id'])) {
            $data['id'] = $_POST['id'];
            $data['title'] = $_POST['title'];
            $data['description'] = $_POST['description'];
            $data['update'] = $_POST['update'];

            $model = new Model();
            $row = $model->update($data);
        } else {
            echo "
                <script>alert('empty fields');</script>
            ";
        }
    }
}else{
    echo "000";
}