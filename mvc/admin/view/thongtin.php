<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/mystyle2.css">
</head>
<body>
<h2 style="border-bottom: 1px solid rgba(131, 129, 129, 0.7);">Thông Tin Đăng Ký</h2>
<form action="" style="color:#212529">

                   <div class="form-row" style="display:flex; padding-bottom: 10px;padding-left: 8px;">
                   <div class="form-group" style="margin-bottom: 16px; ">
                           <label for="exampleInputEmail1">Họ Tên</label>
                           <input type="text" class="form-control" style="width:220px" value="<?=$hochieu['hoten']?>">
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
</body>
</html>