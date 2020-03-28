<?php
    include_once "model/config.php";
    include_once "model/user.php";
    $action = "index";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "index":
            include 'view/login.php';
            break;
        }

?>  
