<?php
    //load index/home.php
    $action = "index";
    if(isset($_GET['act']))
    {
        $action=$_GET['act'];
    }
    switch($action)
    {
        case "index":
            include 'view/home.php';
            break;
    }

?>  