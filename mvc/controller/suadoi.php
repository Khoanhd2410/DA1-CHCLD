<?php 
    $action ="tracuu";
    if(isset($_GET['act'])){
        $action =$_GET['act'];
    }
    switch ($action) {
        case 'tracuu':
            # code...
            include 'view/site/suadoi.php';
            break;
        
        default:
            # code...
            break;
    }
?>