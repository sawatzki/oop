<?php
include_once "../../core/models/contacts.php";

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
                        <a class="contact-read badge badge-info" value="<?= $contact['id'] ?>" href="#">Read</a>
                        <a class="contact-update badge badge-warning" value="<?= $contact['id'] ?>" href="#">update</a>
                        <a class="contact-delete badge badge-danger" value="<?= $contact['id'] ?>" href="#">delete</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

        <?php } ?>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur esse exercitationem fuga obcaecati
        pariatur ratione reiciendis totam! Accusantium aliquam amet aspernatur at consequatur culpa cum deserunt
        distinctio ducimus eaque eius excepturi exercitationem explicabo facere harum id illo inventore ipsa laboriosam
        libero nisi non nostrum officia optio perspiciatis praesentium quas quasi quidem quo ratione reprehenderit rerum
        saepe sint, tempore totam unde voluptatem. Culpa dignissimos doloremque modi molestias vero. Accusamus adipisci,
        alias aliquam atque dolorem explicabo minus non odit rem, repellendus rerum saepe veniam voluptas. Facere natus
        odit officiis optio vitae. Autem cum cupiditate debitis ducimus exercitationem harum officiis quibusdam rem vero
        voluptate! A ab delectus deleniti, facilis quas repudiandae vero. Aliquam consequatur dicta dolorem, fugit iusto
        numquam repellendus tempore? Architecto debitis deleniti ea explicabo facilis odit omnis quis unde! Commodi
        debitis delectus earum exercitationem explicabo illo libero magnam, magni maxime molestiae mollitia nihil nobis
        tenetur voluptatem voluptatibus? A ea error fugit iure mollitia necessitatibus nostrum odio sequi similique.
        Aliquam aperiam aspernatur autem distinctio dolor esse et facere harum, hic illo iste labore quasi veniam,
        vitae, voluptatem. Consequatur illo iusto nisi nulla quas quidem ut. A ad alias amet animi corporis dicta
        ducimus eum exercitationem fuga, harum ipsa maxime nam necessitatibus nisi qui quibusdam similique sint unde
        vero voluptatem. Amet asperiores atque, consequatur consequuntur cum enim expedita facilis fuga fugiat fugit in
        inventore iure magnam, magni modi molestias necessitatibus, non nulla quia repellendus. Aperiam aut culpa
        cupiditate dicta dignissimos dolor dolore dolorem dolores ea est, eum eveniet facere fugit ipsa ipsum itaque
        libero molestias natus, necessitatibus nesciunt nostrum odit officia officiis perspiciatis possimus quae quam
        quia quidem quo quos reiciendis repellendus rerum similique, sit tempore veniam voluptatibus? Ipsum minima nihil
        odit, quasi quidem saepe tempore? Alias blanditiis consequatur delectus, dicta eius harum impedit, molestiae nam
        nostrum, provident qui quidem rem similique. Alias asperiores atque aut beatae cupiditate dicta distinctio
        dolorem eaque eligendi, eos eum fugiat harum, id in inventore laboriosam laborum magni nihil odio officiis
        perspiciatis quae quidem quisquam quos, rem repellendus reprehenderit saepe sapiente sequi soluta totam ut vitae
        voluptatibus. Accusantium consectetur delectus, dolorum ex explicabo id, inventore magnam natus nobis, quia
        quibusdam sapiente sed tempora unde voluptate! Accusantium animi asperiores assumenda beatae consectetur,
        corporis culpa deleniti dolorem est harum ipsum laboriosam maiores nemo nobis nulla odio, quis quos repellendus,
        saepe sapiente temporibus tenetur ut velit voluptates voluptatibus! Aliquam blanditiis, consectetur eum eveniet
        excepturi hic magnam nam provident quam qui quia quod, reprehenderit sed velit, vero! A autem magni vel.
        Doloremque doloribus eius eligendi illo ipsam laudantium natus nihil ut vel. Asperiores dolore exercitationem
        minima, quod tempore totam. Blanditiis consequuntur debitis deleniti dolores expedita, explicabo facilis harum
        iusto laboriosam nisi odit quas quo sequi sit tempora tempore voluptate! A accusantium aperiam asperiores
        commodi consequatur cumque dolores eos expedita facere fugit harum illo incidunt itaque iusto maxime nam nihil,
        nisi optio perspiciatis, praesentium quibusdam reiciendis rem saepe, similique tempora ullam unde ut vero
        voluptatem voluptatibus. Aspernatur commodi cupiditate, error esse ipsum laboriosam nam necessitatibus neque
        perferendis quasi saepe sint voluptates! A accusamus aliquid consequuntur, corporis deleniti doloribus eaque est
        itaque laboriosam nulla numquam pariatur quaerat quo repudiandae, soluta suscipit temporibus, ut voluptatem.
        Adipisci aperiam consequatur cumque deleniti dolore dolorem dolorum earum eius enim eos esse eveniet ex illo
        impedit natus nisi nobis, odit officiis pariatur possimus provident quas quibusdam quo repudiandae rerum ullam
        unde voluptatum? Aliquam, animi asperiores aspernatur, beatae cumque et explicabo illum ipsum minima molestias
        non nostrum officiis perferendis quidem rerum ullam velit. Aliquam assumenda at dicta, eos maxime nobis porro
        quidem? Accusamus corporis cum deleniti dolores, eos explicabo illum iste, laborum pariatur quia quidem rem sint
        tempore, tenetur voluptates. Accusantium ad, aspernatur autem consectetur distinctio ea earum et eveniet hic
        itaque labore maiores nesciunt nobis nostrum numquam, optio perspiciatis quisquam repellat rerum sapiente sed ut
        vel vitae voluptates voluptatibus? Dolorem esse explicabo magni? Consectetur cupiditate dolor eaque error
        inventore laudantium maxime mollitia odit possimus quaerat quia quibusdam quod recusandae repellat sit, suscipit
        tempora. Cumque deleniti est fugiat hic qui, quis quos sed sint. Praesentium quisquam, soluta. Accusamus
        aspernatur atque consectetur cumque eius, inventore ipsa maiores modi nesciunt non possimus recusandae rem
        saepe, tempore voluptatibus! Accusantium aliquid doloremque ea eum ipsum nam natus nihil, nobis pariatur quaerat
        repellat similique temporibus totam? Accusamus aperiam at atque beatae consequatur consequuntur corporis culpa
        cumque debitis dicta, dolorem dolorum ea eaque eius facilis illum ipsa itaque iusto libero minima nam natus
        neque nesciunt numquam odio optio porro possimus quaerat quasi quia repellat repudiandae soluta tenetur ullam
        vel vero voluptate. Animi aperiam assumenda at consequuntur corporis dicta ducimus error excepturi expedita fuga
        laborum libero modi numquam pariatur quas quasi quisquam quod ratione repudiandae tempora totam ullam vel vitae
        voluptas, voluptate. Ad animi ducimus eveniet iste iure laboriosam, numquam officia omnis optio quo reiciendis
        saepe vel veritatis. Alias at autem blanditiis, corporis cumque ea earum eos error et eveniet in ipsam
        laudantium libero minus natus necessitatibus neque non odit officia perferendis praesentium quae ratione
        repellat saepe similique totam voluptas. Asperiores doloribus modi nesciunt quas sed! Doloremque eveniet
        exercitationem iure minima obcaecati quisquam quos sit voluptate. Ab amet autem corporis necessitatibus
        obcaecati placeat sequi sunt. Culpa exercitationem maiores maxime praesentium velit. Accusamus delectus error
        minima nostrum perspiciatis porro quidem recusandae vel! Alias at fugiat fugit iste non numquam possimus
        quisquam sequi. A dolorem labore magnam nemo qui. Ad aperiam aspernatur assumenda corporis, deserunt eveniet
        excepturi explicabo fugit hic illum ipsam itaque laudantium magnam minus numquam odio perspiciatis placeat porro
        quae, quam quas quibusdam quod recusandae rem temporibus totam unde? Autem beatae doloremque doloribus maiores
        rerum sed similique unde velit? Amet aperiam aspernatur, commodi culpa cumque dignissimos, natus nesciunt nobis
        non odio placeat praesentium quasi quidem repellendus sit sunt veritatis. Distinctio, eos ipsam iste iure
        labore, laborum laudantium obcaecati odio officia, perspiciatis quae repudiandae saepe sint tempore temporibus
        ullam unde! Accusamus aliquam aperiam dolore incidunt minima mollitia nulla quidem repudiandae veritatis, vero!
        Dolor dolorem dolorum explicabo itaque voluptate! Animi debitis deserunt dolores eveniet ex harum necessitatibus
        pariatur perspiciatis quam, qui. Aut dolorem dolores et maiores odio quidem.!
    </div>
</div>