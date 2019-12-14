<?php

$view = "notes";
$action = "index";

if(isset($_GET['view'])){
    $view = $_GET['view'];
}else{
    $view = 'notes';
}

if(isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'index';
}

require_once "layouts/main.php";