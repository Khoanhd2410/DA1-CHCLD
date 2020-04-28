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
                        <a href=""><img src="../assets/img/1.jpg" alt="" style="margin-top:10px;width:60%;margin-left:30px;border-radius:50%;"></a>
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
                            <li class="has-menu"><a href=""><i class="fas fa-address-card fa-2x"><span> XÉT DUYỆT</span></i></a></li>
                        </ul>
                    </nav>
                </aside>
                <div class="col-10">
                    <div class="col-8-progress">
                        <div class="col-3-1">
                            <div class="col-3-main">
                                <h2 class="text-left" style="color:white;font-weight:700">Orders</h2>
                                <div class="background-left">
                                    <label class="bg-green">30% <i class="fas fa-level-up-alt"></i></label>
                                </div>
                                <div class="text-right">
                                    <h2 style="color:white;font-weight:700">10,000</h2>
                                </div>
                                <div class="progress">
                                    <div class="progress-bg-green"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3-2">
                        <div class="col-3-main">
                                <h2 class="text-left" style="color:white;font-weight:700">Tax Deduction</h2>
                                <div class="background-left">
                                    <label class="bg-green-2">15% <i class="fas fa-level-down-alt"></i></label>
                                </div>
                                <div class="text-right">
                                    <h2 style="color:white;font-weight:700">10,000</h2>
                                </div>
                                <div class="progress">
                                    <div class="progress-bg-green-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3-3">
                        <div class="col-3-main">
                                <h2 class="text-left" style="color:white;font-weight:700">Orders</h2>
                                <div class="background-left">
                                    <label class="bg-green-3">30% <i class="fas fa-level-up-alt"></i></label>
                                </div>
                                <div class="text-right">
                                    <h2 style="color:white;font-weight:700">10,000</h2>
                                </div>
                                <div class="progress">
                                    <div class="progress-bg-green-3"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3-4">
                        <div class="col-3-main">
                                <h2 class="text-left" style="color:white;font-weight:700">Orders</h2>
                                <div class="background-left">
                                    <label class="bg-green-4">30% <i class="fas fa-level-up-alt"></i></label>
                                </div>
                                <div class="text-right">
                                    <h2 style="color:white;font-weight:700">10,000</h2>
                                </div>
                                <div class="progress">
                                    <div class="progress-bg-green-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-8-manage">
                        <div class="col-8-main">
                            <div class="text-h1">
                                <h2 style="padding-top:18px;padding-left:20px;font-size:22px;color:white;font-weight:700">XÉT DUYỆT</h2>
                            </div>
                            <div class="file-main">
                                <table class="table" style="width:100%;margin-bottom: 1rem;color: #212529;padding-top:10px;opacity:0.8;white-space:nowrap">
                                    <thead>
                                        <tr style="color:white">
                                            <th style="padding-left:20px">#</th>
                                            <th>Avatar</th>
                                            <th>Name</th>
                                            <th>Cmnd</th>
                                            <th>Số điện thoại</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   
                                            foreach(  $xetduyet as $xd)
                                            {
                                                if($xd['status'] == "Đã xét thực")
                                                {
                                                    $change = "Chờ xét duyệt";
                                                }
                                              

                                                
                                            //     if($form['status']==2)
                                            //     {
                                            //         $status = '<div style="text-align:center;color:white;background-color:#2eb7f3;width:50px;height:45px;font-size:12px;border-radius:10px">Đã xét duyệt</div>';
                                            //     }
                                            //     elseif($form['status']==1)
                                            //     {
                                            //         $status = '<div style="text-align:center;color:white;background-color:#C71C22;width:50px;height:45px;font-size:12px;border-radius:10px">Hủy bỏ</div>';
                                                    
                                            //     }
                                            //     else{

                                            //         $status = '<div style="text-align:center;color:white;background-color:#24caa1;width:50px;height:45px;font-size:12px;border-radius:10px">Waiting</div>';
                                            //     }
                                             

                                                echo '<tr style="line-height:50px;padding-top:20px">
                                                    <td style="text-align:center;padding-left:20px;color:white">
                                                        '.$xd['id_congdan'].'
                                                    </td>
                                                    <td style="text-align:center;">
                                                    <img src="../assets/img/1.jpg" alt="Girl in a jacket" style="width:50px;height:40px;border-radius:50%;">
                                                    </td>
                                                    <td style="text-align:center;">
                                                        <a href="#" style="text-decoration:none;color:white"> '.$xd['hoten'].'</a>
                                                    </td>
                                                    <td style="text-align:center;color:white">
                                                        '.$xd['cmnd'].'
                                                    </td>
                                                    <td style="text-align:center;color:white">
                                                        '.$xd['dienthoai'].'
                                                    </td>
                                                    <td style="height:20px;color:white;text-align:center">
                                                        '.$change.'
                                                    </td>
                                                    <td style="width:150px;height:50px;text-align:center">
                                                        <a href="index.php?controller=xetduyet&idcongdan='.$xd['id_congdan'].'" class="tooltip" style="float:left;color:white;padding-top:10px;padding-left:10px"><i class="fas fa-check fa-x" id="tooltip"><span class="tooltiptext tooltip-right">Phê duyệt</span></i></a>
                                                        <a href="index.php?controller=xetduyet&idcongdan='.$xd['id_congdan'].'" class="tooltip"   style="color:white;padding-top:10px;padding-right:15px"><i class="fas fa-times fa-x"><span class="tooltiptext tooltip-right">Không phê duyệt</span></i></a>
                                                    </td>
                                                </tr>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>