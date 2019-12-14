<?php
include_once "../../../core/models/Contacts.php";

$id = $_POST['id'];
$contacts = new Contacts();
$isDelete = $contacts->delete($id);

if($isDelete){
    echo true;
}else{
    echo false;
}
