<?php
    

    //load index/home.php
    $action = "dangky";
    if(isset($_GET['act']))
        $action=($_GET['act']);
    switch($action)
    {
        case "dangky":     
        include 'view/site/dangky.php';
    }
    //home.php
    
?>