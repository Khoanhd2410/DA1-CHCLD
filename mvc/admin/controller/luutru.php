<?php
    //load index/home.php

    $action = "luutru";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "luutru":
            include 'view/luutru.php';      
            break;
    }
    // wtf ai đụng vô cái đó mà xoa luôn chữ php của tui 
?>  