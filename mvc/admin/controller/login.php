<?php
    include_once "model/config.php";
    include_once "model/user.php";
    $action = "login";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "login":
            include 'view/login.php';
            break;
        }

?>  
