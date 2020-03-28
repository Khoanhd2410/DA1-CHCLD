    <div class="container">
        <?php
            //load data header
            include 'view/site/header.php';

            //load controller
            $ctrl="home"; //mặc định sẽ là controler => include "controller/home.php"
            if(isset($_GET['controller']))  //getđược controller(ví dụ: login) => include"controller/login.php"
                $ctrl =$_GET['controller'];
            //controller
            include 'controller/'.$ctrl.'.php';

            // load footer
            include 'view/site/footer.php';
        ?>  
    </div>
