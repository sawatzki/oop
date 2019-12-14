<?php
//print_r($_POST);

if (isset($_POST['contactSave'])) {
    if (
        isset($_POST['firstName']) &&
        isset($_POST['lastName']) &&
        isset($_POST['email']) &&
        isset($_POST['mobile']) &&
        isset($_POST['tel']) &&
        isset($_POST['address']) &&
        isset($_POST['info'])
    ) {
        if (
            !empty($_POST['firstName']) ||
            !empty($_POST['lastName']) ||
            !empty($_POST['email']) ||
            !empty($_POST['mobile']) ||
            !empty($_POST['tel']) ||
            !empty($_POST['address']) ||
            !empty($_POST['info'])
        ){
            $data['firstName'] = $_POST['firstName'];
            $data['lastName'] = $_POST['lastName'];
            $data['email'] = $_POST['email'];
            $data['mobile'] = $_POST['mobile'];
            $data['tel'] = $_POST['tel'];
            $data['address'] = $_POST['address'];
            $data['info'] = $_POST['info'];

//            include_once "../../core/models/Contacts.php";
            include_once "../../../core/models/Contacts.php";

            $modelContacts = new Contacts();
            $modelContacts->insert($data);
            var_dump($data);
        }

    }

}
