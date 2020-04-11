<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/dangky.css">
    <script src="assets/css/dangky.js"></script>
</head>
<body>

    <div class="body">
    <form class="form"  action="#" name="DangKy">
        <h2 style="text-align: center;">TỜ KHAI ĐIỆN TỬ</h2>
        <p style="text-align: center;">(Dùng cho công dân Việt Nam đề nghị cấp, sửa đổi hộ chiếu phổ thông ở trong nước)</p>
        
                                                <!--1-->

                    <div class="chung">

                        <div class="chia2">
                            <label  for="name">1.Họ và tên: </label> 
                            <input style="width: 75%;" type="text"  name="name" placeholder="Nhập họ và tên .....">
                            <br><span id="nameError"></span>
                        </div>
                        
                        <div class="chia2">
                            <label for="phone">Số Điện Thoại: </label> 
                            <input style="width: 72%;" type="text" name="phone"   placeholder="Hãy nhập số điện thoại.....">
                            <span id="dtError"></span> 
                        </div>
                    </div>
                                                <!--2-->
                    <div class="chung">

                        <div class="chia3">
                            <label for="cmnd">2.Thẻ CMND: </label>
                            <input style="width: 95%;" type="text" id="cmnd" name="cmnd" placeholder="Nhập CMND .....">
                            <span id="cmndError"></span> 
                        </div>
                    
                        <div class="chia3">
                            <label for="ngaycapcmnd">Ngày cấp thẻ: </label> 
                            <input style="width: 95%;" type="text" id="ngaycapcmnd" name="ngaycapcmnd" placeholder="Ngày cấp CMND .....">
                            <span id="ngaycapcmndError"></span>
                        </div>

                        <div class="chia3">
                            <label for="noicapthe">Nơi cấp thẻ: </label>
                            <select style="width: 95%;" id="noicapthe" name="noicapthe">
                                <option value=""></option>
                                <option value="1">Cục hồ sơ cảnh sát </option>
                                <option value="2">Cục Cảnh sát ĐKQL cư trú và DLQG về dân cư</option>
                                <option value="3">An Giang</option>
                                <option value="4">Bà Rịa Vũng Tàu</option>
                                <option value="5">Bắc Giang</option>
                            </select>
                            <span id="noicaptheError"></span>
                        </div>
                    </div>
                                                    <!--3-->
                    <div class="chung">
                        <label  for="noisinh">3.Nơi sinh: </label> 
                        <input style="width: 87%;" type="text" id="noisinh" name="noisinh" placeholder="Nhập nơi sinh .....">
                        <br><span id="noisinhError"></span>
                    </div>

                                                    <!--4-->

                    <div class="chung">
                  
                        <div class="chia3">
                                    <label for="noicap">4.Nơi cấp: </label> 
                                    <select style="width: 72%;" name="noicap" id="noicap">
                                        <option value=""></option>
                                        <option value="1">Cục hồ sơ cảnh sát </option>
                                        <option value="2">Cục Cảnh sát ĐKQL cư trú và DLQG về dân cư</option>
                                        <option value="3">An Giang</option>
                                        <option value="4">Bà Rịa Vũng Tàu</option>
                                        <option value="5">Bắc Giang</option>
                                    </select>
                                   <br> <span id="noicapError"></span>
                            </div>
                            
                            <div class="chia3">
                                    <label for="dantoc">Dân tộc: </label> 
                                    <select style="width: 72%;" name="dantoc" id="dantoc">
                                        <option value=""></option>
                                        <option value="1">Kinh (Việt)</option>
                                        <option value="2">Tày</option>
                                        <option value="3">Thái</option>
                                        <option value="4">Hoa(Hán)</option>
                                        <option value="5">Khơ-Me</option>
                                    </select>
                                   <br> <span id="dantocError"></span>
                            </div>

                            <div class="chia3">
                                    <label for="tongiao">Tôn giáo: </label> 
                                    <select style="width: 72%;" name="tongiao" id="tongiao">
                                        <option value=""></option>
                                        <option value="0">Không tôn giáo</option>
                                        <option value="1">Đạo Phật</option>
                                        <option value="2">Đạo Thiên Chúa</option>
                                        <option value="3">Đạo Tin Lành</option>
                                        <option value="4">Đạo Cao Đài</option>
                                        <option value="5">Đạo Hồi</option>
                                    </select>
                                  <br>  <span id="tongiaoError"></span>  
                            </div>
                    </div>  
                                                        <!--5-->
                    <div class="chung">
                        <label for="gender">5.Giới tính: </label> 
                        <input type="radio" id="nam" name="gender" value="nam"><label for="nam">Nam</label>
                        <input type="radio" id="nu" name="gender" value="nu"><label for="nu">Nữ</label>
                        <span id="GioitinhError"></span>
                    </div>

                    
                                                        <!--6-->
                   <div class="chung">
                   
                        <div class="chia3">
                            <label for="Ngaysinh">6.Ngày sinh: </label> 
                            
                            <select style="width: 50%;" name="ngay" id="ngay">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                            <br><span id="NgaysinhError"></span> 
                        </div>

                        <div class="chia3">
                            <label for="thang">Tháng: </label>
                            <select style="width: 50%;" name="thang" >
                                <option value=""></option>
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
                            <br><span id="ThangsinhError"></span> 
                        </div>

                        <div class="chia3">
                            <label for="nam">Năm: </label>
                            <select style="width: 50%;" name="nam" >
                                <option value=""></option>
                                <option value="1">1990</option>
                                <option value="2">1991</option>
                                <option value="3">1992</option>
                                <option value="4">1993</option>
                                <option value="4">1994</option>
                                <option value="4">1995</option>
                            </select>
                            <br><span id="NamsinhError"></span> 
                        </div>
                    
                   </div>
                                                        <!--7-->
                   <div class="chung">

                        <div class="chia2">
                            <label  for="dcthuongtru">7.Địa chỉ thường trú: </label> 
                            <input style="width: 62%;" type="text"  name="dcthuongtru" placeholder="Nhập số nhà,tên đường,tổ/xóm,khu phố/thôn; tên phường/xã">
                            <br><span id="dcthuongtruError"></span>
                        </div>

                        <div class="chia2">
                            <label for="dctamtru">Địa chỉ tạm trú: </label> 
                            <input style="width: 72%;" type="text" name="dctamtru"   placeholder="Nhập số nhà,tên đường,tổ/xóm,khu phố/thôn; tên phường/xã">
                            <br><span id="dctamtruError"></span> 
                        </div>
                    </div>
                                                    <!--8+9-->
                    <div class="chung">

                        <div class="chia3">
                            <label  for="nghenghiep">8.Nghề nghiệp: </label> 
                            <input style="width: 52%;" type="text"  name="nghenghiep" placeholder="Nhập nghề nghiệp">
                            <br><span id="nghenghiepError"></span>
                        </div>

                        <div class="chia7">
                            <label for="dccoquan">9.Địa chỉ cơ quan: </label> 
                            <input style="width: 75%;" type="text" name="dccoquan"   placeholder="Nhập tên cơ quan - Địa chỉ cơ quan">
                            <span id="dccoquanError"></span> 
                        </div>
                    </div>

                                                         <!--10-->
                    <div class="chung">

                        <div class="chia2">
                            <label  for="hotencha">10.Họ tên cha: </label> 
                            <input style="width: 65%;" type="text"  name="hotencha" placeholder="Nhập họ tên cha">
                            <br><span id="hotenchaError"></span>
                        </div>

                        <div class="chia2">
                            <label>Ngày sinh: </label> 
                            <input style="width: 72%;" type="text" name="ngaysinhcha"   placeholder="Ngày sinh của cha">
                            <br><span id="ngaysinhchaError"></span> 
                        </div>
                    </div>

                                                        <!--11-->
                        <div class="chung">

                        <div class="chia2">
                            <label  for="hotenme">11.Họ tên mẹ: </label> 
                            <input style="width: 65%;" type="text"  name="hotenme" placeholder="Nhập họ tên mẹ">
                            <br><span id="hotenmeError"></span>
                        </div>

                        <div class="chia2">
                            <label>Ngày sinh: </label> 
                            <input style="width: 72%;" type="text" name="ngaysinhme"   placeholder="Ngày sinh của mẹ">
                            <br><span id="ngaysinhmeError"></span> 
                        </div>
                        </div>
                                                        <!--12-->
                    <div class="chung">
                            <label  for="noidungdenghi">12.Nội dung đề nghị: </label> 
                            <select style="width: 30%;" name="year" >
                                <option value="">Chọn nội dung đề nghị</option>
                                <option value="1">Cấp hộ chiếu lần đầu</option>
                                <option value="2">Đề nghị khác</option>
                                <option value="3">Cấp lại HC do HC cũ hết hạn</option>
                                <option value="4">Cấp lại hộ chiếu do bị hư hỏng</option>
                                <option value="5">Cấp lại hộ chiếu do bị mất</option>
                            </select>
                            <input style="width: 40%;margin-left: 15px;" type="text"  name="noidungdenghi" placeholder="Nhập nội dung dề nghị nếu có .....">
                    </div>
                
                
            </div>
        
            <div class="chung">
                <input class="form-button" type="button" value="Đăng Ký" onclick="hople_dulieu();">
            </div>
        

           
        
        </form>
    </div>
</body>
</html>
