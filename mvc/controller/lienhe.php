<?php
    

    //load index/home.php
    $action = "lienhe";
    if(isset($_GET['act']))
        $action=($_GET['act']);
    switch($action)
    {
        case "lienhe":     
        include 'view/site/lienhe.php';
    }
    //home.php
    
?>