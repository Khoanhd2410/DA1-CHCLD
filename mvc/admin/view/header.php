<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../assets/css/mystyle.css">
        <link rel="stylesheet" href="../assets/css/dangky.css">
        <link rel="stylesheet" href="../assets/css/login.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    </head>
    <body>
        <!-- begin header -->
        <header>
            <div class="header-container">
                <div class="header">
                    
                <!-- menu -->
                    <div class="menu">
                        <ul class="main-menu">
                            <li class="border-menu">
                                <a href="index.php?controller=home">TRANG CHỦ</a>
                            </li>
                            <li>
                                <a href="">LIÊN HỆ</a>
                                
                            </li>
                        </ul>
                    </div>
                <!-- end -->

                <!-- registration -->
                <div class="regist">
                    <a href="">Đăng ký</a>
                    <?php
          if(isset($_SESSION['id_admin']))
          {
            echo '
            </br><a href="index.php?controller=login&act=logout"><i class="fas fa-sign-out-alt fa-2x"></i></a> ' ;
          }
        ?>
                  
                </div>

                </div>
            </div>
        </header>
        <!-- end header -->
    </body>
    </html>