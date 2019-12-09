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
                    <a href="#" class="read badge badge-info" value="<?= $row['id'] ?>">Read</a>
                    <a href="#" class="edit badge badge-warning" value="<?= $row['id'] ?>">Edit</a>
                    <a href="#" class="delete badge badge-danger" value="<?= $row['id'] ?>">Delete</a>
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
