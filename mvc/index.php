<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/mystyle.css">
</head>
<body>
    <div class="container">
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
    </div>
</body>
</html>