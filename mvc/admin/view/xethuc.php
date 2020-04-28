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
                           <li class="has-menu"><a href=""><i class="fas fa-address-card fa-2x"><span> XÉT THỰC</span></i></a></li>
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
                                <h2 style="padding-top:18px;padding-left:20px;font-size:22px;color:white;font-weight:700"><?php echo $_SESSION['action']; ?></h2>
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
                                            <th style="padding-left:-20px">Actions</th>
                                            <a href=""></a>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- <div style="text-align:center;color:white;background-color:#24caa1;width:50px;height:45px;font-size:12px;border-radius:10px">'.$form['status'].'</div> -->
                                        <?php   
                                            foreach( $information as $form)
                                            {
                                                if( $form['status'] == 'waiting'){
                                                    $action = '<a class="tooltip" href="index.php?controller=xethuc&act=xethuc&idcongdan='.$form['id_congdan'].'" style="float:left;color:white;"><i class="fas fa-address-card fa-2x"><span class="tooltiptext tooltip-right">Xét thực</span></i></a>
                                                               <a class="tooltip" href="index.php?controller=xethuc&act=thongtin&idcongdan='.$form['id_congdan'].'" id="button"  style="color:white;"><i class="fas fa-info-circle fa-2x"><span class="tooltiptext tooltip-right">Thông tin</span></i></a>
                                                    ';
                                                    // đây nè ông button id="button" id="button2"
                                                    // ở đây tui cho 2 id để sử dụng đc cái waiting vs không hợp lệ 

                                                }
                                                else
                                                {
                                                    $action = '<a class="tooltip" style="float:left;color:white;border-color: #033C73"><i class="fas fa-address-card fa-2x "><span class="tooltiptext tooltip-right">Xét thực</span></i></a>
                                                               <a class="tooltip" href="index.php?controller=xethuc&act=thongtin&idcongdan='.$form['id_congdan'].'" id="button2"  style="color:white;"><i class="fas fa-info-circle fa-2x"><span class="tooltiptext tooltip-right">Thông tin</span></i></a>
                                                    ';
                                                }

                                                if ( $form['status'] == 'Đã xét thực'){
                                                    $bgcolor = '<div style="text-align:center;color:white;background-color:#2eb7f3;width:60px;height:45px;font-size:12px;border-radius:10px">'.$form['status'].'</div>';
                                                }
                                                elseif ( $form['status'] == 'Không hợp lệ'){
                                                    $bgcolor =  '<div style="text-align:center;color:white;background-color:#eb4b4b;width:65px;height:45px;font-size:12px;border-radius:10px">'.$form['status'].'</div>';
                                                }
                                                else{
                                                    $bgcolor =  '<div style="text-align:center;color:white;background-color:#24caa1;width:65px;height:45px;font-size:12px;border-radius:10px">'.$form['status'].'</div>';
                                                }
                                                // if($form['id_congdan'] == 1)
                                                // {
                                                //     $status = '<div style="text-align:center;color:white;background-color:#24caa1;width:50px;height:45px;font-size:12px;border-radius:10px">'.$xetthuc.'</div>' ;
                                                // }
                                               
                                                // }
                                                // else{

                                                //     $status = '<div style="text-align:center;color:white;background-color:#24caa1;width:50px;height:45px;font-size:12px;border-radius:10px">Waiting</div>';
                                                // }
                                                // = 2 thi " đã xét thưc" || = 1 thi huy bo else thi no mac dinh neu hk co 1 va 2 thi no la 0 --> đang chờ 
                                                
                                                echo '<tr style="line-height:50px;padding-top:20px">
                                                    <td style="text-align:center;padding-left:20px;color:white">
                                                        '.$form['id_congdan'].'
                                                    </td>
                                                    <td style="text-align:center;">
                                                    <img src="../assets/img/1.jpg" alt="Girl in a jacket" style="width:50px;height:40px;border-radius:50%;">
                                                    </td>
                                                    <td style="text-align:center;">
                                                        <a href="#" style="text-decoration:none;color:white"> '.$form['hoten'].'</a>
                                                    </td>
                                                    <td style="text-align:center;color:white">
                                                        '.$form['cmnd'].'
                                                    </td>
                                                    <td style="text-align:center;color:white">
                                                        '.$form['dienthoai'].'
                                                    </td>
                                                    <td style="height:20px;color:white">
                                                        '.$bgcolor.'
                                                        
                                                    </td>
                                                    <td style="width:150px;height:50px;text-align:center">
                                                        '.$action.'
                                                        
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
        <div class="bg-modal">
            <div class="modal-content">
                <h2 style="border-bottom: 1px solid rgba(131, 129, 129, 0.7);">Thông Tin Đăng Ký</h2>
                <div class="close">X</div>
                <form action="" style="color:#212529">
                   
                       
                            <div class="form-row" style="display:flex; padding-bottom: 10px;padding-left: 8px;">
                            <div class="form-group" style="margin-bottom: 16px; ">
                                    <label for="exampleInputEmail1">Họ Tên</label>
                                    <input type="text" class="form-control" style="width:220px" placeholder="'.$hc['hoten'].'">
                            </div>  
                            <div class="form-group" style="margin-bottom: 16px;padding-left: 20px; ">
                                    <label for="exampleInputEmail1">Cmnd</label>
                                    <input type="text" class="form-control" style="width:210px;" placeholder="'.$hc['cmnd'].'">
                            </div>
                        </div>    
                        <div class="form-group" style="margin-bottom: 16px;padding-left: 20px;padding-bottom: 20px ">
                                <label for="exampleInputEmail1">ID</label>
                                <input type="text" class="form-control" style="width:455px; margin-left: 55px;" placeholder="'.$hc['id_hochieu'].'">
                        </div>
                        <div class="form-group" style="margin-bottom: 16px;padding-left: 20px;padding-bottom:20px ">
                                <label for="exampleInputEmail1">SĐT</label>
                                <input type="text" class="form-control" style="width:455px; margin-left: 45px;" placeholder="'.$hc['sdt'].'">
                        </div>
                        <div class="form-group" style="margin-bottom: 16px;padding-left: 20px;padding-bottom: 20px">
                                <label for="exampleInputEmail1">Thường Trú</label>
                                <input type="text" class="form-control" style="width:450px;">
                        </div>
                        <div class="form-group" style="margin-bottom: 16px;padding-left: 20px; padding-bottom:20px">
                                <label for="exampleInputEmail1">Tạm Trú</label>
                                <input type="text" class="form-control" style="width:450px; margin-left: 25px;">
                        </div>
                          
                 
                    ?>
                    
                 
                </form>      
            </div>
        </div>

    <script type="text/javascript">
        document.getElementById('button').addEventListener('click',function(){
            document.querySelector('.bg-modal').style.display = 'flex';
        });
        document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.bg-modal').style.display = 'none';
        });
        document.getElementById('button2').addEventListener('click',function(){
            document.querySelector('.bg-modal').style.display = 'flex';
        });
        document.querySelector('.close').addEventListener('click',function(){
            document.querySelector('.bg-modal').style.display = 'none';
        });
    </script>
    </body>
    </html>