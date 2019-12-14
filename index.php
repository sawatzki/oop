<?php

$view = "start";

if(isset($_GET['view'])){
    $view = $_GET['view'];
}else{
    $view = 'notes';
}

require_once "layouts/main.php";