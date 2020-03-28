<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng Ký</title>
    <script src="assets/css/dangky.js"></script>
    <link rel="stylesheet" href="assets/css/dangky.css"> 
    

</head>

<body>
    <div class="body">
        <h2 style="text-align: center;">TỜ KHAI ĐIỆN TỬ</h2>
        <p style="text-align: center;">(Dùng cho công dân Việt Nam đề nghị cấp, sửa đổi hộ chiếu phổ thông ở trong nước)</p>
        <form action="#" name="DangKy">
            <div class="trai">
                    <label  for="name">Họ và tên: </label> 
                    <input style="width: 73%;" type="text" id="name" name="name" placeholder="Nhập họ và tên ....."><br>
                    <span id="nameError"></span><br>

                    <label for="cmnd">Thẻ CMND: </label> 
                    <input style="width: 70%;" type="text" id="cmnd" name="cmnd" placeholder="Nhập CMND ....."><br>
                    <span id="cmndError"></span> <br>

                    <label  for="noisinh">Nơi sinh: </label> 
                    <input style="width: 73%;" type="text" id="noisinh" name="noisinh" placeholder="Nhập nơi sinh ....."><br>
                    <span id="noisinhError"></span><br>

                    <label for="gender">Giới tính: </label> 
                    <input type="radio" id="nam" name="gender" value="nam"><label for="nam">Nam</label>
                    <input type="radio" id="nu" name="gender" value="nu"><label for="nu">Nữ</label>
                    <br>
                    <span id="GioitinhError"></span> <br>

                    <label for="Ngaysinh">Ngày sinh: </label> 
                    <label for="ngay">Ngày</label>
                    <select name="ngay" id="ngay">
                        <option value=""></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>

                    <label for="thang">Tháng: </label>
                    <select name="thang" id="thang">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="4">5</option>
                        <option value="4">6</option>
                        <option value="4">7</option>
                        <option value="4">8</option>
                        <option value="4">9</option>
                        <option value="4">10</option>
                        <option value="4">11</option>
                        <option value="4">12</option>
                    </select>

                    <label for="year">Năm: </label>
                    <select name="year" id="year">
                        <option value="1">1990</option>
                        <option value="2">1991</option>
                        <option value="3">1992</option>
                        <option value="4">1993</option>
                        <option value="4">1994</option>
                        <option value="4">1995</option>
                    </select>
                    <br>
                    <span id="NgaysinhError"></span> <br>

                    <label>Số Điện Thoại: </label> 
                    <input style="width: 60%;" type="text" id="phone" name="phone" placeholder="Hãy nhập số điện thoại.....">
                    <br>
                    <span id="dtError"></span> <br>
            </div>
    <!--Phải-->
            <div class="phai">
                    
                    <div class="chia3">
                            <label for="khoihanh">Nơi cấp </label> 
                            <select style="width: 85%;" name="khoihanh" id="khoihanh">
                                <option value="1">Kinh (Việt)</option>
                                <option value="2">Tày</option>
                                <option value="3">Thái</option>
                                <option value="4">Hoa(Hán)</option>
                                <option value="5">Khơ-Me</option>
                            </select>
                            <br>
                            
                    </div>
                    
                    <div class="chia3">
                            <label for="noiden">Dân tộc </label> 
                            <select style="width: 85%;" name="noiden" id="noiden">
                                <option value="0"></option>
                                <option value="1">Kinh (Việt)</option>
                                <option value="2">Tày</option>
                                <option value="3">Thái</option>
                                <option value="4">Hoa(Hán)</option>
                                <option value="5">Khơ-Me</option>
                            </select>
                            <br>
                            
                    </div>

                    <div class="chia3">
                            <label for="noiden">Tôn giáo </label> 
                            <select style="width: 85%;" name="noiden" id="noiden">
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <br>
                            
                    </div>
                    <div>
                            <label>Ghi chú (Dành cho quý khách hàng có yêu cầu đặt biệt</label>   
                            <textarea class="form-control1" cols="60" rows="5"></textarea>

                    </div>
                
                
            </div>
        
 
        

           <br>
        <input style="color: blue" class="form-button" type="button" value="Đăng Ký" onclick="hople_dulieu();">
        </form>
    </div>
</body>
</html>