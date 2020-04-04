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
        
            

                    <div class="chung">

                        <div class="chia2">
                            <label  for="name">Họ và tên: </label> 
                            <input style="width: 80%;" type="text"  name="name" placeholder="Nhập họ và tên .....">
                            
                        </div>
                        
                        <div class="chia2">
                            <label>Số Điện Thoại: </label> 
                            <input style="width: 72%;" type="text" name="phone"   placeholder="Hãy nhập số điện thoại.....">
                            
                        </div>

                        <div class="chia2">
                            <span id="nameError"></span>
                        </div>
                        
                        <div class="chia2">
                            <span id="dtError"></span> 
                        </div>
                    </div>

                    <div class="chung">

                        <div class="chia3">
                            <label for="cmnd">Thẻ CMND: </label>
                            <input style="width: 95%;" type="text" id="cmnd" name="cmnd" placeholder="Nhập CMND .....">
                            
                        </div>
                    
                        <div class="chia3">
                            <label for="ngaycapcmnd">Ngày cấp thẻ: </label> 
                            <input style="width: 95%;" type="text" id="ngaycapcmnd" name="ngaycapcmnd" placeholder="Ngày cấp CMND .....">
                            
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
                        </div>

                        <div class="chia3">
                            <span id="cmndError"></span> 
                        </div>
                    
                        <div class="chia3">
                            <span id="ngaycapcmndError"></span>
                        </div>

                        <div class="chia3">
                            <span id="noicaptheError"></span>
                        </div>
                    </div>
                    
                    <div class="chung">
                        <label  for="noisinh">Nơi sinh: </label> 
                        <input style="width: 87%;" type="text" id="noisinh" name="noisinh" placeholder="Nhập nơi sinh .....">
                    </div>

                    <div class="chung">
                        <span id="noisinhError"></span>
                    </div>

                    <div class="chung">
                  
                        <div class="chia3">
                                    <label for="noicap">Nơi cấp </label> 
                                    <select style="width: 85%;" name="noicap" id="noicap">
                                        <option value=""></option>
                                        <option value="1">Cục hồ sơ cảnh sát </option>
                                        <option value="2">Cục Cảnh sát ĐKQL cư trú và DLQG về dân cư</option>
                                        <option value="3">An Giang</option>
                                        <option value="4">Bà Rịa Vũng Tàu</option>
                                        <option value="5">Bắc Giang</option>
                                    </select>
                            </div>
                            
                            <div class="chia3">
                                    <label for="dantoc">Dân tộc </label> 
                                    <select style="width: 85%;" name="dantoc" id="dantoc">
                                        <option value=""></option>
                                        <option value="1">Kinh (Việt)</option>
                                        <option value="2">Tày</option>
                                        <option value="3">Thái</option>
                                        <option value="4">Hoa(Hán)</option>
                                        <option value="5">Khơ-Me</option>
                                    </select>
                            </div>

                            <div class="chia3">
                                    <label for="tongiao">Tôn giáo </label> 
                                    <select style="width: 85%;" name="tongiao" id="tongiao">
                                        <option value=""></option>
                                        <option value="0">Không tôn giáo</option>
                                        <option value="1">Đạo Phật</option>
                                        <option value="2">Đạo Thiên Chúa</option>
                                        <option value="3">Đạo Tin Lành</option>
                                        <option value="4">Đạo Cao Đài</option>
                                        <option value="5">Đạo Hồi</option>
                                    </select>
                            </div>

                            <div class="chia3">
                                <span id="noicapError"></span>
                            </div>
                            
                            <div class="chia3">
                                <span id="dantocError"></span>
                            </div>

                            <div class="chia3">
                                <span id="tongiaoError"></span>  
                            </div>
                        
                  </div>  

                    <div class="chung">
                        <label for="gender">Giới tính: </label> 
                        <input type="radio" id="nam" name="gender" value="nam"><label for="nam">Nam</label>
                        <input type="radio" id="nu" name="gender" value="nu"><label for="nu">Nữ</label>
                    </div>

                    <div>
                        <span id="GioitinhError"></span> 
                    </div>

                   <div class="chung">
                   
                        <div class="chia3">
                            <label for="Ngaysinh">Ngày sinh: </label> 
                            
                            <select style="width: 50%;" name="ngay" id="ngay">
                                <option value=""></option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </div>

                        <div class="chia3">
                            <label for="thang">Tháng: </label>
                            <select style="width: 50%;" name="thang" id="thang">
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
                        </div>

                        <div class="chia3">
                            <label for="year">Năm: </label>
                            <select style="width: 50%;" name="year" id="year">
                                <option value="1">1990</option>
                                <option value="2">1991</option>
                                <option value="3">1992</option>
                                <option value="4">1993</option>
                                <option value="4">1994</option>
                                <option value="4">1995</option>
                            </select>
                        </div>
                    <span id="NgaysinhError"></span> 
                   </div>

                
                
                    
            
    <!--Phải-->
            
                    

                    <div class="chung">
                            <label>Ghi chú (Dành cho quý khách hàng có yêu cầu đặt biệt</label> 
                            <textarea cols="50" rows="5"></textarea>

                    </div>
                
                
            </div>
        
            <div class="chung">
                <input class="form-button" type="button" value="Đăng Ký" onclick="hople_dulieu();">
            </div>
        

           
        
        </form>
    </div>
</body>
</html>
