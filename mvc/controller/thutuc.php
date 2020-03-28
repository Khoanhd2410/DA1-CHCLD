<?php
    

    //load index/home.php
    $action = "thutuc";
    if(isset($_GET['act']))
        $action=($_GET['act']);
    switch($action)
    {
        case "thutuc":       
        include 'view/site/thutuc.php';
    }
    //home.php
    
?>