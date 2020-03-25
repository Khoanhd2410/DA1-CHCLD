<?php
    

    //load index/home.php
    $action = "index";
    if(isset($_GET['act']))
        $action=($_GET['act']);
    switch($action)
    {
        case "home":
            
        include 'view/site/home.php';
    }
    //home.php
    
?>