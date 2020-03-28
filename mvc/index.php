<?php
            //load data header
            include 'view/site/header.php';

            //load controller
            $ctrl="home";
            if(isset($_GET['controller']))
                $ctrl =$_GET['controller'];
            //controller
            include 'controller/'.$ctrl.'.php';

            

            // load footer
            include 'view/site/footer.php';
?>  
    