
<body>
    <div class="container">
        <?php
        session_start();
            //load header

            include 'view/header.php';
            
            //load home
            $ctrl="home";

            if(!isset($_SESSION['id_admin']))//nếu mà không có sesssion thì controller nó sẽ là login
            {
                $ctrl= "login";
            }
            elseif(isset($_GET['controller'])){
                $ctrl = $_GET['controller'];
            
            //load footer
            }
            include 'controller/'.$ctrl.'.php';
            include 'view/footer.php';
        ?>
    </div>
</body>
