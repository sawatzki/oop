<?php
require $_SERVER['DOCUMENT_ROOT']."/artem/core/models/Notes.php";

$model = new Notes();
$notes = $model->index("notes");
?>
<div id="notes">
    <div class="container">

        <?php if (!empty($notes)) { ?>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titel</th>
                    <th>Beschreibung</th>
                    <th>ACT</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($notes as $note) { ?>
                    <tr>
                        <td><?= $note['id'] ?></td>
                        <td><?= $note['title'] ?></td>
                        <td><?= $note['description'] ?></td>
                        <td>
                            <a class="note-read badge badge-info" value="<?= $note['id'] ?>" href="#">Read</a>
                            <a class="note-update badge badge-warning" value="<?= $note['id'] ?>" href="#">update</a>
                            <a class="note-delete badge badge-danger" value="<?= $note['id'] ?>" href="#">delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        <?php } else {
            echo "Keine Notizen";
        } ?>
    </div>
</div>