<?php

include_once $_SERVER['DOCUMENT_ROOT'] . "/artem/core/models/contacts.php";

$model = new Contacts();
$contacts = $model->index("contacts");

?>
<div id="notes">
    <div class="container mb-5 pb-2">

        <?php if (!empty($contacts)) { ?>

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Vorname</th>
                    <th>Nachname</th>
                    <th>Email</th>
                    <th>Handy</th>
                    <th>Festnetz</th>
                    <th>Adresse</th>
                    <th>info</th>
                    <th>ANS</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($contacts as $contact) { ?>
                    <tr>
                        <td><?= $contact['id'] ?></td>
                        <td><?= $contact['first_name'] ?></td>
                        <td><?= $contact['last_name'] ?></td>
                        <td><?= $contact['email'] ?></td>
                        <td><?= $contact['mobile'] ?></td>
                        <td><?= $contact['tel'] ?></td>
                        <td><?= $contact['address'] ?></td>
                        <td><?= $contact['info'] ?></td>
                        <td>
                            <a class="contact-read badge badge-info" value="<?= $contact['id'] ?>" href="">Read</a>
                            <a class="contact-edit badge badge-warning" value="<?= $contact['id'] ?>"
                               href="" data-target="#edit" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">Bearbeiten</a>
                            <a class="contact-delete badge badge-danger" value="<?= $contact['id'] ?>"
                               href="">delete</a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        <?php } ?>
    </div>
</div>