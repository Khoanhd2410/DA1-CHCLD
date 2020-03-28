<?
    include_once "admin/model/config.php";
    include_once "admin/model/user.php";
    //load index/home.php
    $action = "index";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "index":
            include 'admin/view/home.php';
            break;
    }

?>  