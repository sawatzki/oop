<?php


$id = $_POST['id'];

include_once "../../../core/models/Contacts.php";

$contacts = new Contacts();
$isDelete = $contacts->delete($id);

if($isDelete){
    echo true;
}else{
    echo false;
}
