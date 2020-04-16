<?php
    //load index/home.php
    include 'model/config.php';
    include 'model/xetduyet.php';
    $action = "xetduyet";
    if(isset($_GET['act']))
    $action=$_GET['act'];
    switch($action)
    {
        case "xetduyet":
            if(isset($_GET['idcongdan']))
            $idcongdan= $_GET['idcongdan'];
            $xetduyet = xetduyet();
            include 'view/xetduyet.php';      
            break;
    }
    // wtf ai đụng vô cái đó mà xoa luôn chữ php của tui 
?>  