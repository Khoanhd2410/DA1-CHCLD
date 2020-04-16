<?php
    //load index/home.php

    $action = "giamsat";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "giamsat":
            include 'view/giamsat.php';      
            break;
    }
    // wtf ai đụng vô cái đó mà xoa luôn chữ php của tui 
?>  