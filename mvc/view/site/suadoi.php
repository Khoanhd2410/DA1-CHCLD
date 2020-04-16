<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/suadoi.css">
</head>
<body>
    
</body>
</html>
<!-- tra cứu -->
    <div class="container">
            <div class="box-main">
                <div class="box">
                    <h3 align="center">BỔ SUNG, SỬA ĐỔI THÔNG TIN ĐÃ KHAI</h3>
                    <p align="center">Nhập đầy đủ các thông tin dưới đây để tìm kiếm tờ khai</p>
                </div>
                <!-- số biên nhận -->
            <div class="form-group">
                <label for="ma_to_khai"><strong>Mã số tờ khai</strong></label>
                <div class="col-9">
                    <input class="box-input" type="text" id="maso" name="ma_to_khai" placeholder="Nhập mã số tờ khai đã được cấp">
                </div>
            </div>
            <!-- họ và tên -->
            <div class="form-group">
                <label for="ho_va_ten"><strong>Họ và tên</strong></label>
                <div class="col-9">
                    <input class="box-input" type="text" id="hoten" name="ho_va_ten" placeholder="Nhập đầy đủ họ tên tiếng Việt có dấu">
                </div>
            </div>
            <div class="form-group">
                <label for="ngay_sinh"><strong>Ngày sinh</strong></label>
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
            </div>
            <div class="form-group">
                <div class="text-left">
                <label for="CMND_CCCD" class="cmnd"><strong>CMND/thẻ CCCD số</strong></label>
                </div>
                <div class="col-8">
                    <input class="box-input-2" type="text" name="ho_va_ten" id="cmnd" placeholder="Nhập số CMND/thẻ CCCD nếu có">
                </div>
            </div>
            <div class="form-group" align="center">
                <input type="button" class="button" onclick="dieukien()" value="TÌM KIẾM" style="width:10%;height:10%;background-color:#1f7643;color:white;font-family:sans-serif;cursor:pointer;border:none;border-radius:5px;font-size:16.5px;font-weight:bold">
            </div>
    </div>
    <script type="text/javascript">
     function dieukien(){
        var maso = document.getElementById('maso').value;
        var hoten = document.getElementById('hoten').value;
        var ngaysinh = document.getElementById('date').value;
        var cmnd = document.getElementById('cmnd').value;
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
            else if (cmnd == '')
            {
                alert ("Bạn chưa nhập đủ cmnd ");
            }
            else
            {
                alert ("Đủ dữ kiện bạn chờ chút !");
                return true;
            }
            return false;
        }
        </script>
