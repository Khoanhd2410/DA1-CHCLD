<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/tracuu.css">
</head>
<body>
    
</body>
</html>
<!-- tra cứu -->
    <div class="container">
        <div class="box-main">
            <div class="box">
                <h3 align="center">TRA CỨU TÌNH TRẠNG KẾT QUẢ HỘ CHIẾU</h3>
                <p align="center">Nhập đầy đủ các thông tin dưới đây để tra cứu</p>
            </div>
            <!-- số biên nhận -->
        <div class="form-group">
            <label for="so_bien_nhan"><strong>Số biên nhận</strong></label>
            <div class="col-9">
                <input class="box-input" type="text" id="so_bien" name="so_bien_nhan" placeholder="Nhập số biên nhận">
            </div>
        </div>
         <!-- họ và tên -->
        <div class="form-group">
            <label for="so_bien_nhan"><strong>Họ và tên</strong></label>
            <div class="col-9">
                <input class="box-input" type="text" id="name" name="ho_va_ten" placeholder="Nhập đầy đủ họ tên tiếng Việt có dấu">
            </div>
        </div>
        <div class="form-group">
            <label for="so_bien_nhan"><strong>Ngày sinh</strong></label>
            <div class="col-4">
                <select name="select_one" id="select_one" class="select_one">
                    <option value="0">Đủ ngày, tháng, năm sinh</option>
                    <option value="1">Chỉ có tháng và năm</option>
                    <option value="2">Chỉ có năm sinh</option>
                </select>
            </div>
            <div class="col-6">
                <input type="text" id="date" class="empty">
            </div>
            <input type="button" class="button" onclick="dieukien()" value="TRA CỨU" style="width:10%;height:10%;background-color:#1f7643;color:white;font-family:sans-serif;cursor:pointer;border:none;border-radius:5px;font-size:16.5px;font-weight:bold">
        </div>
        
        </div>
    </div>
    <script type="text/javascript">
     function dieukien(){
        var maso = document.getElementById('so_bien').value;
        var hoten = document.getElementById('name').value;
        var ngaysinh = document.getElementById('date').value;
            if (maso == '')
            {
                alert ("Bạn chưa nhập mã số");
            }
            else if (hoten == '')
            {
                alert ("Bạn chưa nhập họ tên");
            }
            else if (ngaysinh == '')
            {
                alert ("Bạn chưa nhập ngày sinh");
            }
            else
            {
                alert ("Đủ dữ kiện bạn chờ chút !");
                return true;
            }
            return false;
        }
        </script>
