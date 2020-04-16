<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quản Trị</title>
    <link rel="stylesheet" href="../assets/css/mystyle2.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="main">
            <aside class="col-2">
                <div class="profile-img">
                    <a href=""><img src="../assets/img/4.webp" alt="" style="margin-top:10px;width:60%;margin-left:30px;border-radius:50%;"></a>
                    <h2 style="text-align: center;color:white;padding-top:10px"><?php echo $_SESSION['name'] ?></h2>
                </div>
                <div class="profile-social">
                    <ul class="social">
                        <li class="border"><a href=""><i class="fab fa-facebook fa-3x"></i></a></li>
                        <li class="border"><a href=""><i class="fab fa-twitter-square fa-3x"></i></a></li>
                        <li><a href=""><i class="fab fa-instagram fa-3x"></i></a></li>
                    </ul>
                </div>
                <nav class="catalog">
                    <ul class="menu-catalog">
                        <li class="has-menu"><a href=""><i class="fas fa-home fa-2x"><span> Home</span></i></a></li>
                        <li class="has-menu"><a href=""><i class="fas fa-address-card fa-2x"><span> XÉT THỰC</span></i></a></li>
                        <li class="has-menu"><a href=""><i class="fas fa-address-card fa-2x"><span> XÉT DUYỆT</span></i></a></li>
                        <li class="has-menu"><a href=""><i class="fas fa-address-card fa-2x"><span> LƯU TRỮ</span></i></a></li>
                        <li class="has-menu"><a href=""><i class="fas fa-address-card fa-2x"><span> GIÁM SÁT</span></i></a></li>
                    </ul>
                </nav>
            </aside>
            <div class="col-10">
            </div>
        </div>
    </div>
</body>
</html>