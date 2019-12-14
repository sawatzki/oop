<?php


$id = $_POST['id'];

include_once "../../../core/models/Notes.php";
$notes = new Contacts();
$isDelete = $notes->delete($id);

if($isDelete){
    echo true;
}else{
    echo false;
}
