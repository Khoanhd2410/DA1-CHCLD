<?php
    // load tra cuu //
    $action = "tracuu";
    if(isset($_GET['act'])){
        $action =$_GET['act'];
    }
    switch ($action) {
        case 'tracuu':
            include 'view/site/tracuu.php';
            break;
        
        default:
            # code...
            break;
    }
?>