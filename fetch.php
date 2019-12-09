<?php
include_once "model.php";
$model = new Model();
$rows = $model->fetch();
?>


<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>TITLE</th>
        <th>DESCRIPTION</th>
        <th>ACTIONS</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (!empty($rows)) {
        foreach ($rows as $row) { ?>
            <tr>
                <td><?= $row['id']; ?></td>
                <td><?= $row['title']; ?></td>
                <td><?= $row['description']; ?></td>
                <td>
                    <a href="#" id="read" class="badge badge-info">Read</a>
                    <a href="#" id="edit" class="badge badge-warning">Edit</a>
                    <a href="#" id="delete" class="badge badge-danger">Delete</a>
                </td>
            </tr>
        <?php }
    } else {
        echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>no data</strong>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            ";
    } ?>
    </tbody>
</table>
