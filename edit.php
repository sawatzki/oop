<?php

require_once "model.php";
$id = $_POST['id'];
$model = new Model();
$row = $model->edit($id);

if(!empty($row)){ ?>

    <form action="" id="form">
        <div id="result"></div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" id="edit_title" class="form-control" value="<?= $row['title'] ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <textarea name="description" id="edit_description" cols="" rows="3" class="form-control"><?= $row['description'] ?></textarea>
        </div>
        <div class="form-group">
            <button type="submit" id="update" class="btn btn-outline-primary">Submit</button>
        </div>
    </form>


<?php } ?>
